<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;

class PdfController extends Controller{

    public function createPdf (Request $req){
        if($req->name == null){
            return abort(404);
        }
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
    ([  
        'mode' => 'utf-8', 'format' => [190, 236]
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
        //ส่งค่า show to page
        $i = 1;
        $userName = $req->name;
        $phone = $req->phone;
        $address = $req->address;
        $model = $req->model;
        $listRepair = $req->listRepair; 
        $price = $req->price;
        $shipping = $req->shipping;
       

        return view('e-commerce.pdf',compact('i','userName','phone','address','model','listRepair','price','shipping'));
    }

}