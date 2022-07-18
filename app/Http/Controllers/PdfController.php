<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RepairRegistration;
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
    //pdf Admin
    public function createPdfAdmin ($id){
        if($id== null){
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
        
        $mpdf->WriteHTML($this->pdfHTMLAdmin($id));
        $fileName = 'invoicesPdf.pdf';
        $mpdf->Output('pdfFile/'.$fileName,"I");
    }
//repair Admin to pdf
    public function pdfHTMLAdmin($id){
        if($id == null){
            return abort(404);
        }
        $repair = RepairRegistration::with('customer.customerAddress','customer.customerBillAddress')->find($id);
        //รับค่าจาก form profile-account.blade.php
        //ส่งค่า show to page
        if($repair->customer->customerAddress){
            $address =  @$repair->customer->customerAddress->address ." ต.".
                        @$repair->customer->customerAddress->sub_district ." อ.".
                        @$repair->customer->customerAddress->district ." จ.".
                        @$repair->customer->customerAddress->province .
                        @$repair->customer->customerAddress->zipcode;
        }else{
            $address =  @$repair->customer->customerBillAddress->address ." ต.".
                        @$repair->customer->customerBillAddress->sub_district ." อ.".
                        @$repair->customer->customerBillAddress->district ." จ.".
                        @$repair->customer->customerBillAddress->province .
                        @$repair->customer->customerBillAddress->zipcode;
        }
        $i = 1;
        $userName = @$repair->customer->name;
        $phone = @$repair->customer->phone;
        $address = @$address;
        $model = $repair->model;
        $listRepair = $repair->detail; 
        $price = $repair->price;
        $shipping = $repair->shipping_price;
       

        return view('e-commerce.pdf',compact('i','userName','phone','address','model','listRepair','price','shipping'));
    }

}