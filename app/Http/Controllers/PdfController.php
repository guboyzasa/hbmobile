<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Error;
use Illuminate\Http\Request;

class PdfController extends Controller{

    public function createPdf (Request $req){
        $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new \Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        $mpdf = new \Mpdf\Mpdf([
        'fontDir' => array_merge($fontDirs, [
        __DIR__ . '/tmp',
    ]),
        'fontdata' => $fontData + [
        'sarabun' => [
            'R' => 'THSarabunNew.ttf',
            'I' => 'THSarabunNew Italic.ttf',
            'B' => 'THSarabunNew Bold.ttf',
            'BI' => 'THSarabunNew BoldItalic.ttf',
        ]
    ],
        'default_font' => 'sarabun'

    ]);
        $data = 'HB Mobile';
        $mpdf->SetWatermarkText($data,0.1);
        $mpdf->showWatermarkText = true;
        
        $mpdf->WriteHTML($this->pdfHTML($req));
        $fileName = 'invoicesPdf.pdf';
        $mpdf->Output('pdfFile/'.$fileName,"I");
    }

    public function pdfHTML(Request $req){
        if($req->name == null){
            return abort(404);
        }

        //รับค่าจาก form profile-account.blade.php
        $userNames = $req->name;
        $phones = $req->phone;
        $addressing = $req->address;
        $models = $req->model;
        $listRepairs = $req->listRepair;
        $prices = $req->price;
        $shippings = $req->shipping;

        //ส่งค่า show to page
        $userName = $userNames;
        $phone = $phones;
        $address = $addressing;
        $model = $models;
        $listRepair = $listRepairs;
        $price = $prices;
        $shipping = $shippings;

        

        return view('e-commerce.pdf',compact('userName','phone','address','model','listRepair','price','shipping'));
    }

}