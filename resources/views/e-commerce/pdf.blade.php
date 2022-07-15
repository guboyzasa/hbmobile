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
    {{--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}

</head>

<body>

    <div class="container">
        <br>
        {{-- <div class="d-flex flex-column">
            <img src="{{ URL::asset('/assets/dist/images/logo.png') }}" alt="" width="48px" height="48px">
        </div> --}}
        <div class="d-flex flex-column">
            <img src="assets/dist/images/logo.png" width="80"><br>
            <span class="font-weight-bold"><strong>เฮียบอยโมบาย เซอร์วิส | hbmobilekk.me</strong></span><br>
            <small>HB MOBILE SERVICES. 093-5287744</small><br>
            <small>673 เฮียบอยโมบาย เซอร์วิส ซ.วุฒาราม6 ถ.รื่นรมย์ ต.ในเมือง อ.เมือง จ.ขอนแก่น 40000</small>
        </div>

        <div style="text-align:right;">
            <b>วันที่ออกบิล:</b>
            <?php echo date('d-m-Y'); ?>
        </div>
        <div style="text-align: left;border-top:1px solid #000;">
            <div style="font-size: 30px;color: #666;">INVOICE #
                <?php echo date('dmY'); ?> [ยอดชำระ: {{ number_format($price + @$shipping,2) }} ฿]
            </div>
        </div>
        <table style="line-height: 1.3;">
            <tr>
                <td><b>ชื่อลูกค้า:</b> {{ @$userName }}
                </td>
            </tr>
            <tr>
                <td><b>เบอร์โทร:</b> {{ @$phone }}
                </td>
            </tr>
            <tr>
                <td><b>ที่อยู่จัดส่ง:</b> {{ @$address }}
                </td>
            </tr>
        </table>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr style="font-weight: bold;background-color:#f2f2f2;">
                        <th scope="col" style="text-align:center;width:35px;">#</th>
                        <th scope="col" style="text-align:center;width:500px;">รายการ</th>
                        <th scope="col" style="text-align:center;width:100px;">ราคา (บาท)</th>
                        <th scope="col" style="text-align:center;width:100px;">ยอดรวม (บาท)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" style="text-align:center">{{ $i++ }}</th>
                        <td>{{ $model }} - {{ $listRepair }}</td>
                        <td style="text-align:center">{{ number_format($price,2) }}</td>
                        <td style="text-align:center">{{ number_format($price,2) }}</td>
                    </tr>
                    <tr>
                        <td colspan="5"></td>
                    </tr>
                    <tr style="font-weight: bold;">
                        <td colspan="2"></td>
                        <td style="text-align:center;"><strong>ค่าส่ง</strong></td>
                        <td style="text-align:center;">{{ number_format($shipping,2) }}
                        </td>
                    </tr>
                    <tr style="font-weight: bold;">
                        <td colspan="2"></td>
                        <td style="text-align:center;"><strong>ยอดรวม</strong></td>
                        <td style="text-align:center;">
                            <strong>{{ number_format($price + @$shipping,2) }} </strong>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
        <br>
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