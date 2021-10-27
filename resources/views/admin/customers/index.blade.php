@extends('layouts.master')

@section('title') จัดการลูกค้า | Admin - HB MOBILE @endsection

@section('css')

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Dashboard @endslot
        @slot('title') จัดการลูกค้า @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body"> 
                    <button type="button" style="float: right;" class="btn btn-primary create_btn" ><i class="bx bx-plus"></i> เพิ่มลูกค้า </button>
                    <h4 class="card-title">จัดการลูกค้า</h4>
                    <br>
                    
                    <br>
                    <table id="simple_table" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>เบอร์โทร</th>
                                <th>ชื่อ</th>
                                <th>email</th>
                                <th>สร้างจาก</th>
                                <th>สถานะ</th>
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
    
    <div class="modal fade update-profile" id="simpleModal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel"><span id="modal_title"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>

                </div>
                <div class="modal-body">

                    {{-- <form action="#" class="form-horizontal" method="POST" id="customer-form"> --}}
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">เบอร์โทร</label>
                            <input type="text" class="formInput form-control" id="phone" value="" name="phone"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="เบอร์โทร" required>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">ชื่อ - นามสกุล</label>
                            <input type="text" class="formInput form-control" id="name" value="" name="name"
                                placeholder="กรอกชื่อ - นามสกุล" required>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Email</label>
                            <input type="email" class="formInput form-control" id="email" value="" name="email"
                                placeholder="Email" required>
                        </div>
           
                        <div class="mt-3 d-grid">
                            <br>
                            <button class="btn btn-primary waves-effect waves-light" id="saveCusBtn" type="button"> บันทึก </button>
                        </div>
                    {{-- </form> --}}
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



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
                        <img id="output1" max-width="300" style="max-height: 500px;" class="img-responsive form-control" />
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

        $('#simple_table').ready(function () {
            simple = $('#simple_table').DataTable({
                "processing": false,
                "serverSide": false,
                "info": false,
                "searching": true,
                "responsive": true,
                "bFilter": false,
                "destroy": true,
                "order": [
                    [0, "desc"]
                ],
                "ajax": {
                    "url": "{{ route('admin.customer.show') }}",
                    "method": "POST",
                    "data": {
                        "_token": "{{ csrf_token()}}",
                    },
                },
                'columnDefs': [
                    {
                        "targets": [0,1,2,3,4,5],
                        "className": "text-center",
                    },
                ],
                "columns": [
                    {
                        "data": "phone",
                    },
                    {
                        "data": "name",
                    },
                       {
                        "data": "email",
                    },

                    {
                        "data": "agent_id",
                         "render": function (data, type, full) {
                            var text = full.agent ? full.agent.name : 'Admin';
                            return text;
                        }

                    },
                    {
                        "data": "user_id",
                        "render": function (data, type, full) {

                            var text = ``;
                            if(data != null){
                                text = `<span class="badge badge-pill badge-soft-success font-size-11" > <i class="bx bx-check"></i> เข้าสู่ระบบแล้ว </span>`;
                            }else{
                                 text = `<span class="badge badge-pill badge-soft-secondary font-size-11"> ยังไม่เข้าสู่ระบบ </span>`;
                            }
                            return text;

                        }
                    },

                    {
                        "data": "id",
                        "render": function (data, type, full) {
                            var obj = JSON.stringify(full);
                            var button = `

                            <a  href="/admin/customer/profile/${data}" class="btn btn-sm btn-info" ><i class="bx bx-search-alt-2"></i>  </a>
                             <button type="button" class="btn btn-sm btn-danger" onclick='destroy(${data})'><i class="bx bx-trash"></i>  </button>
                            `;
                            if(full.user_id != null){
                                button = `<a  href="/admin/customer/profile/${data}" class="btn btn-sm btn-info" ><i class="bx bx-search-alt-2"></i>  </a>`;
                            }
                            return button;

                        }
                    },
                    
                ],
            });
        });

        $(".create_btn").click(function () {
            $('#modal_title').text('เพิ่มลูกค้าใหม่');
            $('.formInput').val('');
            $('#output').attr('src','');
            $('#simpleModal').modal("show");
        });

        $('#saveCusBtn').click(function(){
            var name = $('#name').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            
            if(name == '' || name == null || phone == '' || phone == null ){
                Swal.fire('แจ้งเตือน!', 'กรุณากรอกข้อมูลให้ครบถ้วน ', 'warning');
            }else if( phone  != '' && phone != null && phone.length < 9){
                console.log(phone.length);
                Swal.fire('แจ้งเตือน!', 'กรอกเบอร์โทรศัพท์ให้ครบถ้วน ', 'warning');
            }else{
       
                openLoading();
                 $.post("{{  route('admin.customer.store')  }}", data = {
                         _token: '{{ csrf_token() }}',
                         name: name,
                         phone: phone,
                         email: email,
                     },
                     function (res) {
                        //  console.log(res)
                        simple.ajax.reload();
                        Swal.fire(res.title, res.msg, res.status);
                        $('#simpleModal').modal("hide");
                        closeLoading();

                     },
                 );
            }
        });

        $("#phone").keyup(function(){
            // console.log('OK');
            if($(this).val().length == 10){
                            $.post("{{  route('admin.customer.check-phone')  }}", data = {
                                    _token: '{{ csrf_token() }}',
                                    text:   $(this).val(),
                                },
                                function (res) {
                                    // console.log(res)
                                    if(res.status == 'warning'){
                                        Swal.fire(res.title, res.msg, res.status);
                                        $("#phone").val('');
                                    }
                                   
                                },
                            );
            }
   
        });

        function destroy(id){
             Swal.fire({
                    title: 'คุณมั่นใจหรือไม่ ?',
                    text: 'ที่จะลูกค้านี้',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#7A7978',
                    confirmButtonText: 'ตกลง',
                    cancelButtonText: 'ยกเลิก',

                }).then((result) => {
                    if (result.isConfirmed) {
                            openLoading();
                            $.post("{{  route('admin.customer.destroy')  }}", data = {
                                    _token: '{{ csrf_token() }}',
                                    id: id,
                                },
                                function (res) {
                                    simple.ajax.reload();
                                    closeLoading();
                                    Swal.fire(res.title, res.msg, res.status);
                                },
                            );
                      
                    }
                });
        }

</script>
  
@endsection
