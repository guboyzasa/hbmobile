<!DOCTYPE html>
<html lang="en">

<head>
    <title>ใบแจ้งชำระ Order-{{ @$order }}-{{ @$userName }}| <?php echo date('d-m-Y'); ?> - <?php echo date('h-i-s a'); ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container">
        <br>
        <div class="d-flex flex-column">
            <span class="font-weight-bold"><strong>เฮียบอยโมบาย เซอร์วิส</strong></span>
            <br><small>HB MOBILE SERVICES.093-5287744</small>
        </div>
        <div style="text-align:right;">
            <b>วันที่ออกบิล:</b> <?php echo date('d-m-Y'); ?><br>
        </div>
        <div style="text-align: left;border-top:1px solid #000;">
            <div style="font-size: 30px;color: #666;"><b>Order #</b> {{ @$order }} [ยอดชำระ: {{ @$total_amount }} ฿]</div>
        </div>
        <table style="line-height: 1.2;">
            <tr>
                <td><b>ชื่อลูกค้า:</b> {{ @$userName }}
                </td>
            </tr>
            <tr>
                <td><b>เบอร์โทร:</b> {{ @$phone }}
                </td>
            </tr>
            <tr>
                <td><b>Email:</b> {{ @$email }}
                </td>
            </tr>
            <tr>
                <td><b>ที่อยู่จัดส่ง:</b> {{ @$address }}
                </td>
            </tr>
        </table>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr style="font-weight: bold;background-color:#f2f2f2;">
                        <th scope="col" style="text-align:center;width:35px;">#</th>
                        <th scope="col" style="text-align:center;width:350px;">รายการ</th>
                        <th scope="col" style="text-align:center;width:100px;">ราคา (บาท)</th>
                        <th scope="col" style="text-align:center;width:100px;">จำนวน (ชิ้น)</th>
                        <th scope="col" style="text-align:center;width:100px;">ยอดรวม (บาท)</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($orderDetails as $row)
                        @if ($row->order_id == $id)
                            <tr>
                                <th scope="row" style="text-align:center">{{ $i++ }}</th>
                                <td>{{ @$row->product->sku }} - {{ @$row->product->name }}</td>
                                <td style="text-align:center">{{ number_format(@$row->total_amount, 2) }}</td>
                                <td style="text-align:center">{{ @$row->amount }}</td>
                                <td style="text-align:center">{{ number_format(@$row->total_amount, 2) }}</td>
                            </tr>
                        @endif
                    @endforeach


                    <tr>
                        <td colspan="5"></td>
                    </tr>
                    <tr style="font-weight: bold;">
                        <td colspan="3"></td>
                        <td style="text-align:center;"><strong>ราคาสินค้ารวม</strong></td>
                        <td style="text-align:center;">{{ @$total_product }}
                        </td>
                    </tr>
                    <tr style="font-weight: bold;">
                        <td colspan="3"></td>
                        <td style="text-align:center;"><strong>ค่าขนส่ง</strong></td>
                        <td style="text-align:center;">{{ @$shipping }}
                        </td>
                    </tr>
                    <tr style="font-weight: bold;">
                        <td colspan="3"></td>
                        <td style="text-align:center;"><strong>ยอดรวม</strong></td> 
                        <td style="text-align:center;">
                            <strong>{{ @$total_amount }} </strong>
                        </td>

                    </tr>

                </tbody>
            </table>

        </div>
        <div style="border-bottom:1px solid #000;"></div>
        <br>
        <p><u><b>ช่องทางชำระ</b></u>:<br />
            ธนาคาร: ไทยพาณิชย์<br /> 
            เลขที่บัญชี: 808-2-70209-0<br />
            พร้อมเพย์: 0935287744<br />
            ชื่อบัญชี: นายรชต วันเทาแก้ว<br />
        </p>
        <p><b style="color:red;">หมายเหตุ:</b> โอนแล้ว รบกวนแจ้งสลิปได้ทางแชท </a></p>

        {{-- <div style="text-align: right">
            <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"
                onclick="history.back()">Back</button>
            <button type="button" class="btn btn-danger btn-sm waves-effect waves-light"
                onclick="javascript:window.print()">
                Print</button>
        </div> --}}
    </div>
</body>

</html>
