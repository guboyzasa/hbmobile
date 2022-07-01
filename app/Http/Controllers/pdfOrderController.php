<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OrderDetail; 
use Illuminate\Http\Request;

class pdfOrderController extends Controller{

    public function createOrderPdf (Request $req){
        if($req->id == null){
            return abort(404);
        }
        $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new \Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        $mpdf = new \Mpdf\Mpdf(
            [
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

        $mpdf->WriteHTML($this->OrderPdfHTML($req));
        $fileName = 'invoicesOrderPdf.pdf';
        $mpdf->Output('pdfFile/'.$fileName,"I");
    }

    public function OrderPdfHTML(Request $req){
        if($req->id == null){
            return abort(404);
        }

        //รับค่าจาก form detail.blade.php
        //ส่งค่า show to page admin.orders.pdf-order
        $i = 1;
        $id = $req->id;
        $order = $req->order;
        $userName = $req->name;
        $phone = $req->phone;
        $address = $req->address;
        $email= $req->mail; 
        $shipping = $req->shipping;
        
        $total_product = $req->total_product;
        $total_amount = $req->total_amount;

        $orderDetails = OrderDetail::all();

        return view('admin.orders.pdf-order',compact('i','id','userName','phone','address','shipping','email','order','orderDetails','total_product','total_amount'));

    }

}