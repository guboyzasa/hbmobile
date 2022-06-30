<!DOCTYPE html>
<html lang="en">

<head>
    <title>ใบแจ้งชำระ | <?php echo date('d-m-Y'); ?> - <?php echo date('h:i:s a'); ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}

</head>

<body>

        <div class="container">
            <br>
            {{-- <div class="d-flex flex-column">
                <img src="{{ URL::asset('/assets/dist/images/logo.png') }}" alt="" width="48px"
                    height="48px">
            </div> --}}
            <div class="d-flex flex-column">
                <span class="font-weight-bold"><strong>เฮียบอยโมบาย เซอร์วิส</strong></span>
                <br><small>HB MOBILE SERVICES.093-5287744</small>
            </div>

            <div style="text-align:right;">
                <b>วันที่ออกบิล:</b> <?php echo date('d-m-Y'); ?>
            </div>
            <div style="text-align: left;border-top:1px solid #000;">
                <div style="font-size: 30px;color: #666;">INVOICE</div>
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
                    <td><b>ที่อยู่:</b> {{ @$address }}
                    </td>
                </tr>
            </table>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr style="font-weight: bold;background-color:#f2f2f2;">
                            <th scope="col" style="text-align:center;width:35px;">#</th>
                            <th scope="col" style="text-align:center;width:350px;">รายการ</th>
                            <th scope="col" style="text-align:center;width:100px;">ราคา (บาท)</th>
                            <th scope="col" style="text-align:center;width:100px;">ค่าส่ง (บาท)</th>
                            <th scope="col" style="text-align:center;width:100px;">ยอดรวม (บาท)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        <tr>
                            <th scope="row" style="text-align:center">{{ $i++ }}</th>
                            <td>{{ @$model }} - {{ @$listRepair }}</td>
                            <td style="text-align:center">{{ @$price }}</td>
                            <td style="text-align:center">{{ @$shipping }}</td>
                            <td style="text-align:center">{{ @$price + @$shipping }}</td>
                        </tr>
                        <tr style="font-weight: bold;">
                            <td colspan="3"></td>
                            <td style="text-align:center;"><strong>ยอดรวม</strong></td>
                            <td style="text-align:center;"><strong>{{ @$price + @$shipping }}</strong>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div style="border-bottom:1px solid #000;"></div>
            <br>
            <p><u><b>ช่องทางชำระ</b></u>:<br />
                ธนาคาร: ไทยพาณิชย์<br />
                ชื่อบัญชี: นายรชต วันเทาแก้ว<br />
                เลขที่บัญชี: 808-2-70209-0<br />
            </p>
            <p><b style="color:red;">หมายเหตุ:</b> โอนแล้ว รบกวนแจ้งสลิปได้ทางแชท </a></p>

            {{-- <div style="text-align: right"> --}}
                {{-- <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"
                    onclick="history.back()">Back</button>
                <button type="button" class="btn btn-danger btn-sm waves-effect waves-light"
                    onclick="javascript:window.print()">
                    Print</button> --}}
            {{-- </div> --}}
        </div>
</body>

</html>
