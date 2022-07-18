<!DOCTYPE html>
<html lang="en">

<head>
    <title>ใบแจ้งชำระค่าซ่อม - {{ @$userName }} |
        <?php echo date('d-m-Y'); ?> -
        <?php echo date('h-i-s a'); ?>
    </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        table,
        td,
        th {
            /* border: 0px solid; */
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>

<body>

    <div class="container">
        <table>
            <tr>
                <th style="text-align: left" colspan="3">
                    <div class="d-flex flex-column">
                        <img src="images/mpdf/logo-mpdf.png" width="350px"><br>
                        <strong>เฮียบอยโมบาย เซอร์วิส</strong><br>
                        <small>1 หมู่ 6 บ้านบ่อทอง ต.ขามป้อม อ.พระยืน จ.ขอนแก่น 40320</small><br>
                        <small>เลขประจำตัวผู้เสียภาษี 1409901531645</small><br>
                        <small>โทร. 093-5287744</small><br>
                        <small>https://hbmobilekk.me</small><br>
                    </div>
                </th>
                <th style="text-align:left;">
                    <div style="font-size: 30px;color: #666;">ใบแจ้งหนี้/ใบเสร็จรับเงิน
                        {{--
                        <?php echo date('dmY'); ?> --}}
                    </div>
                    <hr>

                    <div>
                        <b style="text-align:right;color: #666;">วันที่:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php echo date('d-m-Y'); ?>
                    </div>
                    <div>
                        <b style="text-align:right;color: #666;">ผู้ขาย:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        เฮียบอยโมบาย เซอร์วิส
                    </div>
                    <div>
                        <b style="text-align:right;color: #666;">อ้างอิง:</b>&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php echo date('dmY'); ?>
                        <?php echo date('his'); ?>
                    </div>
                    <hr>
                    <div>
                        <b style="text-align:right;color: #666;">ชื่องาน:</b>&nbsp;&nbsp;&nbsp;&nbsp;
                        {{ $model }} - {{ $listRepair }}
                    </div>
                </th>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <td><b style="text-align:left;color: #666;font-size: 20px;">ลูกค้า: [ยอดชำระ:</b> <b
                        style="font-size: 20px;color: #cc0000;">{{ number_format($price + @$shipping,2) }}</b><b
                        style="text-align:left;color: #666;font-size: 20px;"> ฿]</b><br>
                    {{ @$userName }} - {{ @$phone }}<br>
                    {{ @$address }}
                </td>
            </tr>
            <tr>
                <td></td>
            </tr>

        </table>

        <br>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr style="font-weight: bold;background-color:#9d9d9d;">
                        <th scope="col" style="text-align:center;width:35px;color: #ffffff;">#</th>
                        <th scope="col" style="text-align:center;width:500px;color: #ffffff;">รายการ</th>
                        <th scope="col" style="text-align:center;width:100px;color: #ffffff;">ราคา (บาท)</th>
                        <th scope="col" style="text-align:center;width:100px;color: #ffffff;">ยอดรวม (บาท)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" style="text-align:center;color: #000000;">{{ $i++ }}</th>
                        <td>{{ $model }} - {{ $listRepair }}</td>
                        <td style="text-align:center;color: #000000;">{{ number_format($price,2) }}</td>
                        <td style="text-align:center;color: #000000;">{{ number_format($price,2) }}</td>
                    </tr>
                    
                    <tr>
                        <td colspan="5"></td>
                    </tr>
                    <hr>
                    <tr style="font-weight: bold;">
                        <td colspan="2"></td>
                        <td style="text-align:right;color: #666;"><strong>ค่าจัดส่ง</strong></td>
                        <td style="text-align:center;">{{ number_format($shipping,2) }}
                        </td>
                    </tr>
                    <tr style="font-weight: bold;">
                        <td colspan="2"></td>
                        <td style="text-align:right;color: #666;"><strong>จำนวนเงินรวมทั้งสิ้น</strong></td>
                        <td style="text-align:center;">
                            <strong>{{ number_format($price + @$shipping,2) }} </strong>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <table>
            <tr>
                <td><b style="text-align:left;color: #666;font-size: 15px;">หมายเหตุ</b><br>
                    ---วิธีการชำระเงิน---<br>
                    ธ.ไทยพาณิชย์ 808-270209-0<br>
                    พร้อมเพย์ 0935287744<br>
                    ออมทรัพย์ สาขา เซนทรัลพลาซ่า ขอนแก่น<br>
                    ชื่อบัญชี นายรชต วันเทาแก้ว<br><br>
                    <p><b style="color:red;text-align:left;">โอนแล้ว รบกวนแจ้งสลิปได้ทางแชท </b></p>
                </td>
            </tr>
           </table>
        <br>
        <br>
        <table>
            <tr>
              <td style="text-align:center;width:90px;">{{ @$userName }}<br><hr><br>ผู้จ่ายเงิน</td>
              <td style="text-align:center;width:40px;"><?php echo date('d-m-Y'); ?><br><hr><br>วันที่</td>
              <td style="text-align:center;width:10px;"><img src="images/mpdf/ty.png" width="100px"></td>
              <td style="text-align:center;width:90px;">รชต<br><hr><br>ผู้รับเงิน</td>
              <td style="text-align:center;width:35px;"><?php echo date('d-m-Y'); ?><br><hr><br>วันที่</td>

            </tr>
            {{-- <tr>
              <td style="text-align:center;width:90px;">ผู้จ่ายเงิน</td>
              <td style="text-align:center;width:40px;">วันที่</td>
              <td style="text-align:center;width:10px;"></td>
              <td style="text-align:center;width:90px;">ผู้รับเงิน</td>
              <td style="text-align:center;width:40px;">วันที่</td>
            </tr> --}}
          </table>
          
        

        {{-- <div style="text-align: right">
            <button type="button" class="btn btn-danger btn-sm waves-effect waves-light"
                onclick="history.back()">Back</button>
            <button type="button" class="btn btn-danger btn-sm waves-effect waves-light"
                onclick="javascript:window.print()">
                Print</button>
        </div> --}}
    </div>
</body>

</html>