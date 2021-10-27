@extends('layouts.master')

@section('title') รายละเอียดออเดอร์ | Admin - DissingThailand @endsection

@section('css')

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Dashboard @endslot
        @slot('title') รายละเอียดออเดอร์ @endslot
    @endcomponent

        <div class="row">

                <div class="col-md-12">
                    <div class="col-md-12">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                                <i class="bx bx-check-double" ></i>

                            </div>

                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>

    </div>


 
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <div class="invoice-title" >
                        <h4 class="float-end font-size-16 text-primary">Order # {{ @$order->code }}</h4>
                        <div class="mb-4">
                            <img src="{{ URL::asset('/assets/dist/images/logo.png') }}" alt="logo" height="40" />
                        </div>
                    </div>
                  
                    <hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <address>
                                <strong>ข้อมูลลูกค้า : </strong><br>
                                ชื่อ : <span class="text-primary">{{ @$order->user->name }}</span><br>
                                เบอร์โทร : {{ @$order->customer->phone }}<br>
                                Email : {{ @$order->customer->email }}<br>
                                Facebook : {{ @$order->customer->facebook }}<br>
                            </address>
                        </div>

                        <div class="col-sm-4 text-sm-center">
                         {{-- <h4 class="text-danger"> สถานะ </h4> --}}
                        @switch($order->status)
                             @case(0)
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <i class="bx bx-loader"></i>  รออัพโหลดสลิป
                                </div>
                                @break
                            @case(1)
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <i class="bx bx-upload"></i>  อัพโหลดสลิปแล้ว
                                </div>
                                @break
                            @case(2)
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    <i class="bx bx-check"></i>  ยืนยันการชำระเงิน
                                </div>
                                @break
                            @case(3)
                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    <i class="bx bx-run"></i>  กำลังแพ็คสินค้า
                                </div>
                                @break
                            @case(4)
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="bx bx-check-double"></i>  จัดส่งแล้ว
                                </div>
                                @break
                            @case(5)
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bx bx-error-alt"></i>  จัดส่งไม่สำเร็จ
                                </div>
                                @break
                            @case(6)
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bx bx-error-alt"></i>  ยกเลิกรายการ
                                </div>
                                @break
            
                            @default
                                 
                        @endswitch
                        </div>

                        <div class="col-sm-4 text-sm-end">
                            <address class="mt-2 mt-sm-0">
                                <strong>ที่อยู่สำหรับจัดส่ง :</strong><br>
               
                                {{ @$order->orderDeliveryAddress->name }}<br>
  
                                {{ @$order->orderDeliveryAddress->address }}<br>
                                {{ @$order->orderDeliveryAddress->sub_district }}, {{ @$order->orderDeliveryAddress->district }}<br>
                                {{ @$order->orderDeliveryAddress->province }}, {{ @$order->orderDeliveryAddress->zipcode }}<br>
                                {{-- เลขผู้เสียภาษี: {{ @$order->orderDeliveryAddress->personal_code }}<br> --}}
                                โทร: {{ @$order->orderDeliveryAddress->phone }}<br>
                                Email: {{ @$order->orderDeliveryAddress->email }}<br>
                                @if($order->orderDeliveryAddress->note)
                                <span style="color: red;">หมายเหตุ : {{ @$order->orderDeliveryAddress->note }}</span><br>
                                @endif
                            </address>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <address class="mt-2 mt-sm-0">
                          
                            </address>
                        </div>
                        <div class="col-sm-6 text-sm-end">
                            <address class="mt-2 mt-sm-0">
                                <strong>ที่อยู่สำหรับออกบิล :</strong><br>
                                {{ @$order->orderBillAddress->name }}<br>
                                {{ @$order->orderBillAddress->address }}<br>
                                {{ @$order->orderBillAddress->sub_district }}, {{ @$order->orderBillAddress->district }}<br>
                                {{ @$order->orderBillAddress->province }}, {{ @$order->orderBillAddress->zipcode }}<br>
                                @if($order->orderBillAddress->personal_code)
                                    เลขผู้เสียภาษี: {{ @$order->orderBillAddress->personal_code }}<br>
                                @endif
                                โทร: {{ @$order->orderBillAddress->phone }}<br>
                                Email: {{ @$order->orderBillAddress->email }}<br>
                            </address>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 mt-4">
                            <address>
                                <strong>วิธีการชำระเงิน :</strong><br>
                                <span class="text-success">{{ @$order->paymentMethod->bank_name }}</span><br>
                                {{ @$order->paymentMethod->bank_account_no }}<br>
                                {{ @$order->paymentMethod->bank_account_name }}<br>
                            
                            </address>
                        </div>
                        <div class="col-sm-4 mt-4 text-sm-center">
                            <address>
                                <strong>หลักฐานการชำระเงิน :</strong><br>
                                @if ($order->orderPayment && $order->orderPayment->payment_slip)
                                <a style="text-align:center;" href="#" onclick='showImg("{{ $order->orderPayment->payment_slip }}")'>
                                    <img  src="{{ URL::asset('get-content/'.$order->orderPayment->payment_slip) }}" width="100%" class="css image img grid-item" style="margin-top:2.5rem; margin-bottom:2.5rem; max-width: 150px;">
                                </a>
                                @else
                                    <br>
                                    <br>
                                    <h4 class="text-danger"> ** ยังไม่มีหลักฐานการชำระเงิน **</h4>
                                @endif
                            </address>
                        </div>
                        <div class="col-sm-4 mt-4 text-sm-end">
                            <address>
                                <strong>วันที่ออเดอร์ :</strong><br>
                                {{ date_format($order->created_at,"d/m/Y") }}<br><br>
                            </address>
                        </div>
                    </div>
                    
                    <div class="py-2 mt-3">
                        <h3 class="font-size-15 font-weight-bold">รายการออเดอร์</h3>
                    </div>
                    <div class="table-responsive">

                        <table class="table table-nowrap">
                            <thead>
                                <tr>
                                    <th style="width: 70px;">No.</th>
                                    <th>รายการ</th>
                                    <th class="text-end">จำนวน(ชิ้น)</th>
                                    <th class="text-end">ราคา(บาท)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orderDetails as $row)                                
                                <tr>
                                    <td> {{ $i++ }} </td>
                                    <td>{{ @$row->product->sku }} - {{ @$row->product->name }} </td>
                                    <td class="text-end">{{ @$row->amount }} </td>
                                    <td class="text-end">฿ {{ number_format(@$row->total_amount, 2) }} </td>
                                </tr>
                                @endforeach

                                <tr>
                                    <td colspan="3" class="text-end">ราคาสินค้ารวม</td>
                                    <td class="text-end">฿ {{ number_format(@$order->total, 2) }}</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-0 text-end">
                                        <strong>ค่าขนส่ง</strong></td>
                                    <td class="border-0 text-end">฿ {{ number_format(@$order->shipping_price , 2) }}</td>
                                </tr> 
                                <tr>
                                    <td colspan="3" class="border-0 text-end">
                                        <strong>ราคารวมทั้งหมด</strong></td>
                                    <td class="border-0 text-end"><h4 class="m-0 text-success">฿ {{ number_format(@$order->total_amount , 2) }}</h4></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    <form action="{{ route('admin.order.change-status') }}"  method="POST">
                        @csrf
                        <input type="hidden" name="orderId" value="{{ $order->id }}" />
                        <div class="row">
                            
                            <div class="col-9">
                  
                            </div>

                            <div class="col-3">
                                    {{-- <div class="row">
                               
                                        <div class="col-6">
                                            <div class="float-end">
                                                <div class="form-check form-check-secondary">
                                                    @if ($order->status == 0)
                                                        <input class="form-check-input" type="radio" value="0" name="status" id="formCheckcolor0" required checked>  
                                                    @else
                                                        <input class="form-check-input" type="radio" value="0" name="status" id="formCheckcolor0" required>  
                                                    @endif           
                                                    <label classz="form-check-label" for="formCheckcolor0"> รออัพโหลด </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div> --}}
                                    <div class="row">
                                        <div class="col-6">
                                            
                                        </div>

                                        <div class="col-6">
                                            <div class="float-end">
                                                <div class="form-check form-check-secondary">
                                                    @if ($order->status == 0)
                                                        <input class="form-check-input" type="radio" value="0" name="status" id="formCheckcolor0" required checked>  
                                                    @else
                                                        <input class="form-check-input" type="radio" value="0" name="status" id="formCheckcolor0" required>  
                                                    @endif           
                                                    <label classz="form-check-label" for="formCheckcolor0"> รออัพโหลด </label>
                                                </div>
                                                <div class="form-check form-check-warning">
                                                    @if ($order->status == 1)
                                                        <input class="form-check-input" type="radio" value="1" name="status" id="formCheckcolor1" required checked>  
                                                    @else
                                                        <input class="form-check-input" type="radio" value="1" name="status" id="formCheckcolor1" required>  
                                                    @endif           
                                                    <label classz="form-check-label" for="formCheckcolor1"> อัพโหลดสลิปแล้ว </label>
                                                </div>
                                                <div class="form-check form-check-primary">
                                                    @if ($order->status == 2)
                                                        <input class="form-check-input" type="radio" value="2" name="status" id="formCheckcolor2" required checked>           
                                                    @else
                                                        <input class="form-check-input" type="radio" value="2" name="status" id="formCheckcolor2" required> 
                                                    @endif        
                                                    <label classz="form-check-label" for="formCheckcolor2"> ยืนยันการชำระเงิน </label>
                                                </div>
                                                <div class="form-check form-check-info">
                                                    @if ($order->status == 3)
                                                        <input class="form-check-input" type="radio" value="3" name="status" id="formCheckcolor3" required checked>        
                                                    @else
                                                        <input class="form-check-input" type="radio" value="3" name="status" id="formCheckcolor3" required>        
                                                    @endif       
                                                    <label classz="form-check-label" for="formCheckcolor3"> กำลังแพ็คสินค้า </label>
                                                </div>
                                                <div class="form-check form-check-success">
                                                    @if ($order->status == 4)
                                                        <input class="form-check-input" type="radio" value="4" name="status" id="formCheckcolor4" required checked>           
                                                    @else
                                                        <input class="form-check-input" type="radio" value="4" name="status" id="formCheckcolor4" required>  
                                                    @endif         
                                                    <label classz="form-check-label" for="formCheckcolor4"> จัดส่งแล้ว </label>
                                                </div>
                                                <div class="form-check form-check-danger">  
                                                    @if ($order->status == 5)
                                                        <input class="form-check-input" type="radio" value="5" name="status" id="formCheckcolor5" required checked>  
                                                    @else
                                                        <input class="form-check-input" type="radio" value="5" name="status" id="formCheckcolor5" required>  
                                                    @endif       
                                                    <label classz="form-check-label" for="formCheckcolor5"> จัดส่งไม่สำเร็จ </label>
                                                </div>

                                                <div class="form-check form-check-danger">
                                                    @if ($order->status == 6)    
                                                        <input class="form-check-input" type="radio" value="6" name="status" id="formCheckcolor6" required checked>
                                                    @else
                                                        <input class="form-check-input" type="radio" value="6" name="status" id="formCheckcolor6" required>
                                                    @endif
                                                    <label classz="form-check-label" for="formCheckcolor6"> ยกเลิกรายการ </label>
                                                </div>
                                    
                                            </div>
                                        </div>

                                        {{-- <div class="col-6">
                                            <div class="float-end"> --}}
                                                {{-- <div class="form-check form-check-success">
                                                    @if ($order->status == 4)
                                                        <input class="form-check-input" type="radio" value="4" name="status" id="formCheckcolor4" required checked>           
                                                    @else
                                                        <input class="form-check-input" type="radio" value="4" name="status" id="formCheckcolor4" required>  
                                                    @endif         
                                                    <label classz="form-check-label" for="formCheckcolor4"> จัดส่งแล้ว </label>
                                                </div> --}}
                                                {{-- <div class="form-check form-check-danger">  
                                                    @if ($order->status == 5)
                                                        <input class="form-check-input" type="radio" value="5" name="status" id="formCheckcolor5" required checked>  
                                                    @else
                                                        <input class="form-check-input" type="radio" value="5" name="status" id="formCheckcolor5" required>  
                                                    @endif       
                                                    <label classz="form-check-label" for="formCheckcolor5"> จัดส่งไม่สำเร็จ </label>
                                                </div> --}}
                                                {{-- <div class="form-check form-check-danger">
                                                    @if ($order->status == 6)    
                                                        <input class="form-check-input" type="radio" value="6" name="status" id="formCheckcolor6" required checked>
                                                    @else
                                                        <input class="form-check-input" type="radio" value="6" name="status" id="formCheckcolor6" required>
                                                    @endif
                                                    <label classz="form-check-label" for="formCheckcolor6"> ยกเลิกรายการ </label>
                                                </div> --}}
                                        
                                            {{-- </div>
                                        </div> --}}
                                    </div>
                            </div>
                            
                        </div>
                        <br>
                        <br>
                        <div class="d-print-none">
                            <div class="float-end">
                                <a href="{{ route('admin.order.index') }}" class="btn btn btn-secondary pull-right"><i class="fa fa-arrow-left" aria-hidden="true"></i> ย้อนกลับ </a>
                                <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1"><i
                                        class="fa fa-print"></i> Print </a>
                                <button type="submit" class="btn btn-primary w-md waves-effect waves-light"> <i class="bx bx-save"></i> บันทึก </a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>



    <!--  Picture modal example -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" id="infoModal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">รูปภาพ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                        <img id="output1" max-width="400" style="max-height: 560px;" class="img-responsive form-control" />
                  </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  
@endsection
@section('script')
<script>
        $(document).ready(function () {

            var simple = '';

        });

        function showImg(img){
            // console.log(img);
            $('#infoModal').modal('show');
            $('#output1').attr('src', `{{ URL::asset('get-content/${img}') }}`);
        }

</script>
  
@endsection
