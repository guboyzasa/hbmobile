@extends('layouts.master')

@section('title')
ลงทะเบียนงานติดตั้ง
| Admin - HB Mobile Services
@endsection

@section('css')
<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<style>
    .select2-container {
        width: 100%;
        z-index: 100000;

    }
</style>
@endsection

@section('content')
@component('components.breadcrumb')
@slot('li_1')
Dashboard
@endslot
@slot('title')
ลงทะเบียนงานติดตั้ง
@endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card shadow-lg" style="border-radius: 5px">
            <div class="card-body">
                <button type="button" style="float: right; margin: 2px;" class="btn btn-success customer_btn btn-sm"><i
                        class="bx bx-plus"></i> เพิ่มลูกค้า </button>
                <button type="button" style="float: right; margin: 2px;" class="btn btn-primary onsite_btn btn-sm"><i
                        class="bx bx-plus"></i> ลงทะเบียน </button>

                <h4 class="card-title">ลงทะเบียนงานติดตั้ง</h4>
                <br>

                <br>
                <table id="onsite_table" class="table dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <th>วันที่รับงาน</th>
                            <th>ชื่อลูกค้า</th>
                            <th>รายการ</th>
                            <th>ราคาติดตั้ง</th>
                            {{-- <th>ค่าบริการ</th> --}}
                            {{-- <th>สถานะประกัน</th> --}}
                            {{-- <th>สถานะติดตั้ง</th> --}}
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>

                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<div class="modal fade update-profile" id="customerModal" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <i class='bx bx-check-double'></i>
                <h5 class="modal-title" id="myLargeModalLabel"> เพิ่มลูกค้าใหม่ </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- <form action="#" class="form-horizontal" method="POST" id="customer-form"> --}}
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">เบอร์โทร</label>
                        <input type="text" class="formInput form-control" id="phone" value="" name="phone"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                            placeholder="เบอร์โทร" required>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">ชื่อ - นามสกุล</label>
                        <input type="text" class="formInput form-control" id="name" value="" name="name"
                            placeholder="กรอกชื่อ - นามสกุล" required>
                    </div>

                    {{-- <div class="mb-3">
                        <label for="name" class="form-label">Email</label>
                        <input type="email" class="formInput form-control" id="email" value="" name="email"
                            placeholder="Email" required>
                    </div> --}}

                    <div class="mt-3 d-grid">
                        <br>
                        <button class="btn btn-primary waves-effect waves-light" id="saveCusBtn" type="button"> บันทึก
                        </button>
                    </div>
                    {{--
                </form> --}}
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- ADD -->
<div class="modal fade update-profile" id="onsiteModal" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <i class='bx bx-check-double'></i>
                <h5 class="modal-title" id="myLargeModalLabel"><span id="onsite_title"></span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal onsite-form" action="#" id="onsite-form-1">
                    @csrf
                    <div class="mb-3">
                        <label for="customer" class="form-label ">ลูกค้า</label>
                        <select name="customer" id="customer" class="form-control select2 formInput"
                            style="width: 100% " required>
                            <option value=""> -- เลือกลูกค้า -- </option>
                            @foreach ($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->phone }} {{ $customer->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="datepicker1">วันที่รับเครื่อง</label>
                                <div class="input-group" id="datepicker1">
                                    <input type="text" id="startDate" class="form-control " placeholder="วัน-เดือน-ปี"
                                        data-date-format="dd-mm-yyyy" data-date-container='#datepicker1'
                                        data-date-end-date="" value="{{ date('d-m-Y') }}" data-provide="datepicker"
                                        name="startDate" autocomplete="off" required>
                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="datepicker2">วันสิ้นสุดประกัน</label>
                                <div class="input-group" id="datepicker2">
                                    <input type="text" id="endDate" class="form-control form-inputs"
                                        placeholder="วัน-เดือน-ปี" data-date-format="dd-mm-yyyy"
                                        data-date-container='#datepicker2' data-date-end-date=""
                                        value="{{ date('d-m-Y', strtotime(date('Y-m-d') . '+3 month')) }}"
                                        data-provide="datepicker" name="endDate" autocomplete="off" required>
                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="model" class="form-label">ชื่องาน</label>
                                <input type="text" class="form-control formInput formInputonsite" id="model"
                                    name="model" placeholder="กรอกชื่องาน" aria-describedby="add" aria-label="model">
                            </div>
                            <div class="col-6">
                                <label for="" class="form-label">ราคา </label>
                                <div class="input-group" id="datepicker2">
                                    <input type="number" class="form-control formInput formInputonsite" id="price"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                        name="price" placeholder="ราคา" aria-describedby="add" aria-label="shop">
                                    <span class="input-group-text">บาท</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            {{-- <div class="col-6">
                                <label for="" class="form-label">สถานะติดตั้ง</label>
                                <select name="status" id="" class="form-control formInput formInputonsite" required>
                                    <option value=""> -- เลือกสถานะติดตั้ง -- </option>
                                    @foreach (@$statusRe as @$status)
                                    <option value="{{ @$status->id }}">{{ @$status->name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            {{-- <div class="col-4">
                                <label for="" class="form-label">ค่าขนส่ง </label>
                                <div class="input-group" id="datepicker2">
                                    <input type="number" class="form-control formInput formInputonsite"
                                        id="shippingPrice"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                        name="shippingPrice" placeholder="ราคา" aria-describedby="add"
                                        aria-label="shop">
                                    <span class="input-group-text">บาท</span>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <label for="detail" class="form-label">รายการติดตั้ง </label>
                    <div class="mb-3">
                        <div class="field_wrapper">
                            <div class="input-group" style="margin-bottom: 5px;">
                                <button class="btn btn-light" type="button"> <i class="bx bx-wrench text-primary"></i>
                                </button>
                                <input type="text" class="form-control detail formInputonsite" id="detail" name="detail"
                                    placeholder="เพิ่มรายการติดตั้ง" aria-describedby="add" aria-label="detail">
                                {{-- <button class="btn btn-danger check_button" type="button" id="check"><i
                                        class="bx bx-check-double"></i> </button> --}}
                                {{-- <button class="btn btn-success add_button" type="button" id="add"> <i
                                        class="bx bxs-add-to-queue"></i> </button> --}}
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 d-grid">
                        <br>
                        <button class="btn btn-primary waves-effect waves-light" type="submit"> บันทึก </button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- EDIT -->
<div class="modal fade update-profile" id="onsiteEditModal" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <i class='bx bx-edit'></i>
                <h5 class="modal-title " id="myLargeModalLabel"><span id="onsite_title_edit"></span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal onsite-form" action="#" id="onsite-form-2">
                    @csrf
                    <input type="hidden" class="formInputonsite" name="onsite_id" value="" id="onsite_id">
                    <div class="mb-3">
                        <label for="customer" class="form-label ">ลูกค้า</label>
                        <select name="customer" id="customerEdit" class="form-control select2 formInput"
                            style="width: 100% " required>
                            <option value=""> -- เลือกลูกค้า -- </option>
                            @foreach ($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->phone }} {{ $customer->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="datepicker1">วันที่รับเครื่อง</label>
                                <div class="input-group" id="datepicker3">
                                    <input type="text" id="startDateEdit" class="form-control"
                                        placeholder="วัน-เดือน-ปี" data-date-format="dd-mm-yyyy"
                                        data-date-container='#datepicker3' data-date-end-date=""
                                        value="{{ date('d-m-Y') }}" data-provide="datepicker" name="startDate"
                                        autocomplete="off" required>
                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="datepicker2">วันสิ้นสุดประกัน</label>
                                <div class="input-group" id="datepicker4">
                                    <input type="text" id="endDateEdit" class="form-control form-inputs"
                                        placeholder="วัน-เดือน-ปี" data-date-format="dd-mm-yyyy"
                                        data-date-container='#datepicker4' data-date-end-date=""
                                        value="{{ date('d-m-Y', strtotime(date('Y-m-d') . '+3 month')) }}"
                                        data-provide="datepicker" name="endDate" autocomplete="off" required>
                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">

                            <div class="col-6">

                                <label for="model" class="form-label">ชื่องาน</label>
                                {{-- <select name="product" id="" class="form-control formInput" style="width: 100% "
                                    required> --}}
                                    <input type="text" class="form-control models" id="modelEdit" name="model"
                                        placeholder="กรอกชื่องาน" aria-describedby="add" aria-label="model">
                            </div>
                            <div class="col-6">
                                <label for="price" class="form-label">ราคา</label>
                                <div class="input-group" id="datepicker2">
                                    {{-- <select name="shop" id="priceEdit" class="form-control formInput" required>
                                        --}}
                                        <input type="number" class="form-control price" id="priceEdit" name="price"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                            placeholder="ราคา" aria-describedby="add" aria-label="serial">
                                        <span class="input-group-text">บาท</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            {{-- <div class="col-6">
                                <label for="status" class="form-label">สถานะติดตั้ง</label>
                                <select name="status" id="statusEdit" class="form-control ">
                                    <option value=""> -- เลือกสถานะติดตั้ง -- </option>
                                    @foreach ($statusRe as $status)
                                    <option value="{{ $status->id }}">{{ $status->name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            {{-- <div class="col-4">
                                <label for="shippingPrice" class="form-label">ค่าขนส่ง</label>
                                <div class="input-group" id="datepicker2">

                                    <input type="number" class="form-control shippingPrice" id="shippingPriceEdit"
                                        name="shippingPrice"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                        placeholder="ราคา" aria-describedby="add" aria-label="serial">
                                    <span class="input-group-text">บาท</span>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <label for="detail" class="form-label">รายการติดตั้ง</label>
                    <div class="mb-3">
                        <div class="field_wrapper">
                            <div class="input-group" style="margin-bottom: 5px;">
                                <button class="btn btn-light" type="button"> <i class="bx bx-wrench text-primary"></i>
                                </button>
                                <input type="text" class="form-control detail" id="detailEdit" name="detail"
                                    placeholder="เพิ่มรายการติดตั้ง" aria-describedby="add" aria-label="detail">
                                {{-- <button class="btn btn-danger check_button" type="button" id="check"><i
                                        class="bx bx-check-double"></i> </button> --}}

                            </div>
                        </div>
                    </div>
                    <div style="text-align: right">
                        <br>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                        <button class="btn btn-warning waves-effect waves-light" type="submit"><i
                                class='bx bxs-edit'></i> แก้ไข</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>

<script>
    $(document).ready(function() {
            // var simple = '';
            $('.select2').select2();
            var onsite = '';
            var order = '';
            var customerId = $('#customer_id').val();
            var i = 0;
        });

        $(".create_btn").click(function() {

            $('#modal_title').text(' แก้ไขงานติดตั้ง');
            $('.formInput').val('');
            $('#simpleModal').modal("show");
        });

        $("#startDate").change(function() {
            var d = $(this).val();
            // var newDate = moment(d).add(1, 'years');
            // var newDate = moment(d, "DD-MM-YYYY").format('L');
            var endDate = moment().format('DD-MM-YYYY');
            console.log(newDate)
            console.log(endDate)
            $("#endDate").val(endDate);

        });

        $('#onsite-form').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            var customer = $('#customer').val();

            openLoading();

            $.ajax({
                type: "method",
                method: "POST",
                url: "{{ route('admin.onsite.store') }}",
                processData: false,
                contentType: false,
                data: formData,
                success: function(res) {
                    console.log(res);
                    simple.ajax.reload();
                    Swal.fire(res.title, res.msg);
                    $('#simpleModal').modal("hide");
                    closeLoading();
                }
            });


        });

        function showInfo(obj) {
            $('#modal_title').text('แก้ไขงานติดตั้ง');
            $('#id').val(obj.id);
            $("#customer").val(obj.customer_id).trigger('change'); //ลูกค้า
            $("#model").val(obj.model).trigger('change'); //รุ่น
            $('#price').val(obj.price); //ราคา
            // $('#status').val(obj.status); //สถานะ
            // $('#shippingPrice').val(obj.shippingPrice); //ราคาขนส่ง
            $('#startDate').val(moment(obj.onsite_start_date).format('DD-MM-YYYY'));
            $('#endDate').val(moment(obj.onsite_end_date).format('DD-MM-YYYY'));
            $('#detail').val(obj.detail); //รายการติดตั้ง
            $('#simpleModal').modal("show");

        }

        function destroy(id) {
            Swal.fire({
                title: 'คุณมั่นใจหรือไม่ ?',
                text: 'ที่จะลบการลงทะเบียนงานติดตั้งรายการนี้',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#7A7978',
                confirmButtonText: 'ตกลง',
                cancelButtonText: 'ยกเลิก',

            }).then((result) => {
                if (result.isConfirmed) {
                    openLoading();
                    $.post("{{ route('admin.onsite.destroy') }}", data = {
                            _token: '{{ csrf_token() }}',
                            id: id,
                        },
                        function(res) {
                            simple.ajax.reload();
                            closeLoading();
                            Swal.fire(res.title, res.msg, res.status);
                        },
                    );

                }
            });
        }

        $('#saveCusBtn').click(function() {
            var name = $('#name').val();
            var phone = $('#phone').val();
            var email = $('#email').val();

            if (name == '' || name == null || phone == '' || phone == null) {
                Swal.fire('แจ้งเตือน!', 'กรุณากรอกข้อมูลให้ครบถ้วน ', 'warning');
            } else if (phone != '' && phone != null && phone.length < 9) {
                console.log(phone.length);
                Swal.fire('แจ้งเตือน!', 'กรอกเบอร์โทรศัพท์ให้ครบถ้วน ', 'warning');
            } else {

                openLoading();
                $.post("{{ route('admin.customer.store') }}", data = {
                        _token: '{{ csrf_token() }}',
                        name: name,
                        phone: phone,
                        email: email,
                    },
                    function(res) {
                        //  console.log(res)
                        // simple.ajax.reload();
                        Swal.fire(res.title, res.msg, res.status);
                        closeLoading();
                        window.location.reload();

                    },
                );
            }
        });

        $(".customer_btn").click(function() {
            $('.formInputCustomer').val('');
            $('#customerModal').modal("show");
        });

        $("#phone").keyup(function() {
            // console.log('OK');
            if ($(this).val().length == 10) {
                $.post("{{ route('admin.customer.check-phone') }}", data = {
                        _token: '{{ csrf_token() }}',
                        text: $(this).val(),
                    },
                    function(res) {
                        // console.log(res)
                        if (res.status == 'warning') {
                            Swal.fire(res.title, res.msg, res.status);
                            $("#phone").val('');
                        }

                    },
                );
            }

        });

        $('#onsite_table').ready(function() {

            onsite = $('#onsite_table').DataTable({
                "processing": false,
                "serverSide": false,
                "info": false,
                "searching": true,
                "responsive": true,
                "bFilter": false,
                "destroy": true,
                "oLanguage": {
                    // "sSearch": "ค้นหา :",
                    // "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
                    "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
                    // "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
                    "aaSorting" :[[0,'desc']],
                "oPaginate": {
                "sPrevious":"<<",
                "sNext":">>",
                }
            },
                "order": [
                    [0, "desc"]
                ],
                "ajax": {
                    "url": `{{ route('admin.onsite.show') }}`,
                    "method": "POST",
                    "data": {
                        "_token": "{{ csrf_token() }}",
                    },
                },
                'columnDefs': [{
                    "targets": [0, 1, 2, 3, 4],
                    "className": "text-center",
                }, ],
                "columns": [{
                        "data": "onsite_start_date",
                        "render": function(data, type, full) {
                            return moment(data).format('MM-DD-YYYY');
                        }
                    },
                    {
                        "data": "customer",
                        "render": function(data, type, full) {
                            return data ? data.name :
                                '<span class="badge badge-pill badge-soft-danger font-size-11"> ลูกค้าถูกลบ </span>';

                        }
                    },

                    {
                        "data": "customer",
                        "render": function(data, type, full) {
                            return full.model + " x " + full.detail;
                        }
                    },

                    {
                        "data": "price",
                        "render": function(data, type, full) {
                            let sum = full.price;
                            return (sum.toLocaleString('en-US'));
                        }
                    },

                    // {
                    //     "data": "shipping_price",
                    // },

                    // {
                    //     "data": "onsite_end_date",
                    //     "render": function(data, type, full) {
                    //         return moment(data).format('DD-MM-YYYY');
                    //     }
                    // },
                    // {
                    //     "data": "onsite_end_date",
                    //     "render": function(data, type, full) {
                    //         var dateEnd = moment(data);
                    //         var dateNow = moment();
                    //         var text =
                    //             `<span class="badge badge-pill badge-soft-success font-size-11"> อยู่ในประกัน </span>`;
                    //         var diff = dateNow.diff(dateEnd);
                    //         // console.log(diff);
                    //         if (diff >= 0) {
                    //             text =
                    //                 `<span class="badge badge-pill badge-soft-danger font-size-11"> หมดประกัน </span>`;
                    //         }

                    //         return text;
                    //     }
                    // },
                    // {
                    //     "data": "agent_id",
                    //     "render": function(data, type, full) {
                    //         var text = full.agent ? full.agent.name : 'Admin';
                    //         return text;
                    //     }
                    // },

                    // {
                    //     "data": "status",
                    //     "render": function(data, type, full) {
                    //         var text = data;
                    //         if (text == 1) {
                    //             text =
                    //                 `<span class="badge badge-pill badge-soft-danger font-size-11"> กำลังดำเนินการ </span>`;
                    //         } else if (text == 2) {
                    //             text =
                    //                 `<span class="badge badge-pill badge-soft-success font-size-11"> ติดตั้งเสร็จแล้ว </span>`;
                    //         } else if (text == 3) {
                    //             text =
                    //                 `<span class="badge badge-pill badge-soft-warning font-size-11"> ติดตั้งไม่ได้ </span>`;
                    //         }
                    //         return text;
                    //     }
                    // },
                    // {
                    //     "data": "customer_id",
                    //     "render": function(data, type, full) {
                    //         var obj = JSON.stringify(full);
                    //         var button = ` 
                    //             <a  href="/admin/create-invoice/${full.id}" class="btn btn-sm btn-info" target="_blank"><i class="bx bx-printer"></i></a>
                                
                    //      `;
                    //         return button;
                    //     }
                    // },

                    {
                        "data": "id",
                        "render": function(data, type, full) {
                            var obj = JSON.stringify(full);
                            var button = `
                        
                                <button type="button" class="btn btn-sm btn-warning" onclick='showInfoonsite(${obj})'><i class='bx bxs-edit'></i></button>
                                @if (Auth::user()->is_super_admin == 1)
                                <button type="button" class="btn btn-sm btn-danger" onclick='destroyonsite(${data})'><i class="bx bx-trash"></i>  </button>
                                @endif
                            `;
                            return button;
                           // <a  href="/admin/create-invoice/${full.id}" class="btn btn-sm btn-info" target="_blank"><i class="bx bx-printer"></i></a>
                        }
                    },


                ],
            });
        });

        $(".onsite_btn").click(function() {
            $('#onsite_title').text('ลงทะเบียนงานติดตั้ง');
            $('.formInputonsite').val('');
            $('#onsiteModal').modal("show");
        });

        $("#startDate").change(function() {
            var d = $(this).val();
            // var newDate = moment(d).add(1, 'years');
            var newDate = moment(d, "DD-MM-YYYY").add(1, 'years').format('L');
            var endDate = moment(newDate).format('DD-MM-YYYY');
            console.log(newDate)
            console.log(endDate)
            $("#endDate").val(endDate);

        });

        $("#startDateEdit").change(function() {
            var d = $(this).val();
            // var newDate = moment(d).add(1, 'years');
            var newDate = moment(d, "DD-MM-YYYY").add(1, 'years').format('L');
            var endDate = moment(newDate).format('DD-MM-YYYY');
            console.log(newDate)
            console.log(endDate)
            $("#endDateEdit").val(endDate);

        });

        $('.onsite-form').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            // var serials = $('#serials').val();
            var customer = $('#customer').val();
            var id = $('#onsite_id').val();
            // var product = $('#product').val();
            console.log('customer : ' + customer)
            // console.log('product : ' + product)
            console.log('id : ' + id)
            if (customer == null && customer == '') {
                Swal.fire('ผิดพลาด!', 'กรุณากรอกข้อมูลให้ครบถ้วน', 'warning');
            } else {
                openLoading();
                if (id != null && id != '') {
                    $.ajax({
                        type: "method",
                        method: "POST",
                        url: "{{ route('admin.onsite.update') }}",
                        processData: false,
                        contentType: false,
                        data: formData,
                        success: function(res) {
                            console.log(res);
                            onsite.ajax.reload();
                            Swal.fire(res.title, res.msg, res.status);
                            $('#onsiteEditModal').modal("hide");
                            closeLoading();
                        }
                    });
                } else {
                    $.ajax({
                        type: "method",
                        method: "POST",
                        url: "{{ route('admin.onsite.store') }}",
                        processData: false,
                        contentType: false,
                        data: formData,
                        success: function(res) {
                            console.log(res);
                            onsite.ajax.reload();
                            Swal.fire(res.title, res.msg, res.status);
                            if (res.status == 'success') {
                                $('#onsiteModal').modal("hide");
                            }
                            closeLoading();
                        }
                    });
                }
            }
        });

        function showInfoonsite(obj) {
            $('#onsite_title_edit').text('แก้ไขงานติดตั้ง');
            $('#onsite_id').val(obj.id);
            // $("#customerEdit").val(obj.customer_id);
            $("#customerEdit").val(obj.customer_id).trigger('change');
            $("#modelEdit").val(obj.model).trigger('change');
            $('#priceEdit').val(obj.price).trigger('change');
            // $('#statusEdit').val(obj.status).trigger('change');
            // $('#shippingPriceEdit').val(obj.shipping_price).trigger('change');
            $('#startDateEdit').val(moment(obj.onsite_start_date).format('DD-MM-YYYY'));
            $('#endDateEdit').val(moment(obj.onsite_end_date).format('DD-MM-YYYY'));
            $('#detailEdit').val(obj.detail).trigger('change');
            $('#onsiteEditModal').modal("show");

        }

        function destroyonsite(id) {
            Swal.fire({
                title: 'คุณมั่นใจหรือไม่ ?',
                text: 'ที่จะลบการลงทะเบียนงานติดตั้งรายการนี้',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#7A7978',
                confirmButtonText: 'ตกลง',
                cancelButtonText: 'ยกเลิก',

            }).then((result) => {
                if (result.isConfirmed) {
                    openLoading();
                    $.post("{{ route('admin.onsite.destroy') }}", data = {
                            _token: '{{ csrf_token() }}',
                            id: id,
                        },
                        function(res) {
                            onsite.ajax.reload();
                            closeLoading();
                            Swal.fire(res.title, res.msg, res.status);
                        },
                    );

                }
            });
        }

        $(document).ready(function() {
            var x = 1; //Initial field counter is 1
            var maxField = 100; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var fieldHTML = `<div class="input-group">
                            <button class="btn btn-secondary" type="button" > ${x} </button>
                            <input type="text" class="form-control serials" name="serials[]" placeholder="กรอก Serial no" aria-describedby="add" aria-label="serial" />
                            <button class="btn btn-danger remove_button" type="button"><i class="bx bx-trash"></i> </button>
                            </div>`; //New input field html 


            //Once add button is clicked
            $(addButton).click(function() {
                //Check maximum number of input fields
                // console.log('add');
                if (x < maxField) {
                    x++; //Increment field counter
                    // $(wrapper).append(fieldHTML); //Add field html
                    $(wrapper).append(`<div class="input-group" style="margin-bottom: 5px;">
                            <button class="btn btn-light" type="button" > <i class="bx bx-barcode text-danger"></i> </button>
                            <input type="text" class="form-control serials" id="" name="serials[]" placeholder="กรอก Serial no" aria-describedby="add" aria-label="serial">
                            <button class="btn btn-danger remove_button" type="button"><i class="bx bx-trash"></i> </button>
                            </div>`);
                }

            });

            //Once remove button is clicked
            $(wrapper).on('click', '.remove_button', function(e) {
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });
</script>
@endsection