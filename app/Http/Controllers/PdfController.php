<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\RepairRegistration;
use Aws\Api\Validator;
use AWS\CRT\HTTP\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class PdfController extends Controller{

    public function createPdf (){
      
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
        // $mpdf->SetWatermarkText('HB Mobile');
        // $mpdf->showWatermarkText = true;

        $mpdf->WriteHTML($this->pdfHTML());
        $fileName = 'htmltopdf.pdf';
        $mpdf->Output('pdfFile/'.$fileName,"I");
    }
    public function pdfHTML(){
           
        $number='1';
        $userName = 'ลูกค้า';
        $phone = '0850033441';
        $address = '1 ม.6 บ้านบ่อทอง อ.พระยืน จ.ขอนแก่น 40000';
        $listRepair = 'เปลี่ยนแบต';
        $price = '600';
        $shipping = '80';
        
        return view('e-commerce.pdf',compact('number','userName','phone','address','listRepair','price','shipping'));
        // ,compact('number','userName','phone','address','listRepair','price','shipping') 
    }

}