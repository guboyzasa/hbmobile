<!DOCTYPE html>
<html lang="en">

<head>
    <title>ใบแจ้งชำระ | <?php echo date('d-m-Y'); ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
        <div class="container">
            <br>
            <div>
                <img src="{{ URL::asset('/assets/dist/images/logo.png') }}" alt="" width="48px"
                    height="48px">

                <div class="d-flex flex-column">
                    <span class="font-weight-bold">เฮียบอยโมบาย เซอร์วิส</span>
                    <br><small>HB MOBILE SERVICES.093-5287744</small>
                </div>
            </div>
            <div style="text-align:right;">
                <b>วันที่ออกบิล:</b> <?php echo date('d-m-Y'); ?>
            </div>
            <div style="text-align: left;border-top:1px solid #000;">
                <br>
                <div style="font-size: 30px;color: #666;">INVOICE</div>
            </div>
            <table style="line-height: 1.5;">
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
                            <th scope="col" style="text-align:center;width:80px;">ยอดรวม (บาท)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" style="text-align:center">{{ @$number }}</th>
                            <td>{{ @$listRepair }} x1</td>
                            <td style="text-align:center">{{ @$price }}</td>
                            <td style="text-align:center">{{ @$shipping }}</td>
                            <td style="text-align:center">{{ @$price + @$shipping }}</td>
                        </tr>
                        <tr style="font-weight: bold;">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style="text-align:center;">ยอดรวม</td>
                            <td style="text-align:center;">{{ @$price + @$shipping }}
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
            <form action="create" method="POST">
                @csrf
            <p><b style="color:red;">หมายเหตุ:</b> โอนแล้ว รบกวนแจ้งสลิปได้ทางแชท </a></p>
            <button type="submit" class="btn btn-primary" >To PDF</button>

        </form>
        </div>
    

</body>

</html>