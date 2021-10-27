@extends('layouts.master')

@section('title') จัดการตัวแทนจำหน่าย | Admin - DissingThailand  @endsection

@section('css')

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Dashboard @endslot
        @slot('title') จัดการตัวแทนจำหน่าย @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body"> 
                    <a href="{{ route('admin.agent.create-user') }}" style="float: right; margin-left: 5px;" class="btn btn-success btn-sm " ><i class="bx bx-plus"></i> จัดการ Account </a>
                    <button type="button" style="float: right;" class="btn btn-primary create_btn btn-sm " ><i class="bx bx-plus"></i> เพิ่มตัวแทนจำหน่าย </button>
                    <h4 class="card-title">จัดการตัวแทนจำหน่าย</h4>
                    <br>
                    
                    <br>
                    <table id="simple_table" class="table table-bordered dt-responsive  w-100" width="100%">
                        <thead>
                            <tr>
                                <th>รูป</th>
                                <th>ชื่อ</th>
                                <th>ภูมิภาค</th>
                                <th>เบอร์โทร</th>
                                <th>สถานะ</th>
                                <th>เปิด-ปิด</th>
                                <th width="50px"></th>
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
                    <h5 class="modal-title" id="myLargeModalLabel"><span id="modal_title"></span> <span id="agent_status" class="badge badge-pill badge-soft-secondary font-size-11">  </span> </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>

                </div>
                <div class="modal-body">

                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" id="agent-form">
                        @csrf
                        <input type="hidden" class="formInput" name="id" value="" id="id">
                        <div class="mb-3">
                            <label for="name" class="form-label">ชื่อ</label>
                            <input type="text" class="formInput form-control" id="name" value="" name="name"
                                placeholder="ชื่อตัวแทนจำหน่าย" required>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">ที่อยู่</label>
                            <input type="text" class="formInput form-control" id="address" value="" name="address"
                                placeholder="ที่อยู่ตัวแทนจำหน่าย" required>
                        </div>

                        <div class="mb-3">
                            <label for="line" class="form-label">Line ID </label>
                            <input type="text" class="formInput form-control" id="line" value="" name="line"
                                placeholder="Line ID" >
                        </div>
                  
                        <div class="mb-3">
                            <div class="row">
                                    <div class="col-6">
                                        <label for="name" class="form-label">เบอร์โทรศัพท์ 1 </label>
                                        <input type="text" class="formInput form-control" id="tel1" value="" name="tel1" placeholder="เบอร์โทรศัพท์ 1 "  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="name" class="form-label">เบอร์โทรศัพท์ 2 </label>
                                        <input type="text" class="formInput form-control" id="tel2" value="" name="tel2" placeholder="เบอร์โทรศัพท์ 2"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="เบอร์โทร" >
                                    </div>
                            </div>
                        </div>

                      <div class="mb-3">
                            <div class="row">

                                <div class="col-6">
                                    <label for="name" class="form-label">ชื่อ Facebook </label>
                                    <input type="text" class="formInput form-control" id="facebook" value="" name="facebook"
                                        placeholder="ชื่อ Facebook " >
                                </div>
                                
                                <div class="col-6">
                                    <label for="name" class="form-label">ลิงค์ Facebook </label>
                                    <input type="text" class="formInput form-control" id="facebookLink" value="" name="facebookLink"
                                        placeholder="ลิงค์ Facebook" >
                                </div>
                            </div> 
                        </div> 
                        
                        <div class="mb-3">
                            <label for="name" class="form-label"> ภูมิภาค </label>
                            <select name="thaiRegion" id="thaiRegion" class="form-control">
                                @foreach ( $thaiRegions as  $thaiRegion)
                                    <option id="th{{ $thaiRegion->id }}" value="{{ $thaiRegion->id }}">{{ $thaiRegion->name }}</option>
                                @endforeach
                            </select>
                        </div>   

                        <div class="mb-3">
                            <label for="image" class="form-label">รูปหมวดหมู่สินค้า </label>

                            <input type="file" onchange="loadFile(event)" class="form-control formInput" accept="image/*" id="imageFile" placeholder="กรุณาเลือกรูปภาพ"  >
                            <input type="hidden" value="" name="imgbase64" id="imgbase64">

                        </div>

                        <div class="mb-3" id="showImg">
                            <label for="image" class="form-label">รูปล่าสุด </label>
                            <img id="output" max-width="300" style="max-height: 300px;" class="img-responsive form-control" />
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
                    "url": "{{ route('admin.agent.show') }}",
                    "method": "POST",
                    "data": {
                        "_token": "{{ csrf_token()}}",
                    },
                },
                'columnDefs': [
                    {
                        "targets": [0,1,2,3,4,5,6],
                        "className": "text-center",
                    },
                ],
                "columns": [
                    {
                        "data": "id",
                        "render": function (data, type, full) {

                            var text = `<img src="" alt="" class="avatar-md h-auto d-block rounded center">`;
                            if(full.img){
                                text = `<a href="#" onclick="showInfoImg('${full.img}')"><img src="{{ URL::asset('get-content/${full.img}') }}" alt="" class="rounded avatar-md"></a>`;
                            }

                            return text;
                        }
                    },
              
                    {
                        "data": "name",
                    },
                       {
                        "data": "thai_region.name",
                    },
                       {
                        "data": "tel1",
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
                        "data": "is_active",
                        "render": function (data, type, full) {
                            var text = ``;
                            if(data == 1){
                                text = `<input type="checkbox" onclick="changeStatus(${full.id})" id="switch${full.id}" switch="primary" checked />
                                    <label for="switch${full.id}" data-on-label="เปิด" data-off-label="ปิด"></label>`;
                            }else{
                                   text = `<input type="checkbox" onclick="changeStatus(${full.id})" id="switch${full.id}" switch="primary"  />
                                    <label for="switch${full.id}" data-on-label="เปิด" data-off-label="ปิด"></label>`;
                            }
                            return text;
                        }
                    },

        

           
                    {
                        "data": "id",
                        "render": function (data, type, full) {
                            var obj = JSON.stringify(full);
                            var button = `
                            <button type="button" class="btn btn-sm btn-info" onclick='showInfo(${obj})'><i class="bx bx-search-alt-2"></i> </button>
                             <button type="button" class="btn btn-sm btn-danger" onclick='destroy(${data})'><i class="bx bx-trash"></i>  </button>
                            `;
                            if(full.user_id){
                                button = `
                                    <button type="button" class="btn btn-sm btn-info" onclick='showInfo(${obj})'><i class="bx bx-search-alt-2"></i> </button>
                            `;
                            }
                            return button;

                        }
                    },
                    
                ],
            });
        });

        $(".create_btn").click(function () {

            document.getElementById("imageFile").value = "";
            $('#imgbase64').val('');
            $('#modal_title').text('เพิ่มตัวแทนจำหน่ายใหม่');
            $('.formInput').val('');
            $('#output').attr('src','');
            $('#showImg').hide();
            $('#simpleModal').modal("show");
        });

        $('#agent-form').submit(function(e){
            var name = $('#name').val();
             e.preventDefault();
            if(name == '' || name == null){
                Swal.fire('ผิดพลาด!', 'กรุณากรอกข้อมูลให้ครบถ้วน', 'warning');
            }else{
                openLoading();
               
                let formData = new FormData(this);
                console.log('OK');
                $.ajax({
                    type: "method",
                    method: "POST",
                    url: "{{ route('admin.agent.store') }}",
                    processData: false,
                    contentType: false,
                    data: formData,
                    success: function (res) {
                        console.log(res);
                        simple.ajax.reload();
                        Swal.fire(res.title, res.msg, res.status);
                        $('#simpleModal').modal("hide");
                        closeLoading();
                    }
                });
            }
          
        });

        function changeStatus(id){
                $.post("{{  route('admin.agent.change-status')  }}", data = {
                    _token: '{{ csrf_token() }}',
                    id: id,
                },
                function (res) {
                    simple.ajax.reload();
                },
            );
        }

        function showInfoImg(img){
            $('#infoModal').modal('show');
            $('#output1').attr('src', `{{ URL::asset('get-content/${img}') }}`);
        }

        function showInfo(obj){

            $('#modal_title').text('แก้ไขตัวแทนจำหน่าย');
            document.getElementById("imageFile").value = "";
            $('#imgbase64').val('');
            $('#id').val(obj.id);
            $('#name').val(obj.name);
            $('#address').val(obj.address);
            $('#tel1').val(obj.tel1);
            $('#tel2').val(obj.tel2);
            $('#facebook').val(obj.facebook);
            $('#facebookLink').val(obj.facebook_link);
            $('#thaiRegion').val(obj.thai_region_id);
            $('#line').val(obj.line);
            // var selectId = `#th${obj.thai_region_id}`;
            // console.log(selectId);
            // $(selectId).attr("selected",true);
            // document.getElementById(selectId).selected;
            //  $(`#th${obj.thai_region_id}`).val(obj.name);
            $('#output').attr('src', `{{ URL::asset('get-content/${obj.img}') }}`);
            if(obj.user_id){
                $('#agent_status').text('เข้าสู่ระบบแล้ว');
                $('#agent_status').addClass('badge-soft-success');
                $('#agent_status').removeClass('badge-soft-secondary');
            }else{
                $('#agent_status').text('ยังไม่เข้าสู่ระบบ');
                $('#agent_status').addClass('badge-soft-secondary');
                $('#agent_status').removeClass('badge-soft-success');
            }

            $('#simpleModal').modal("show");
   
        }

        var loadFile = function(event) {
              const fileSize = event.target.files[0].size / 1024 / 1024; // in MiB
            if (fileSize > 2) {
                // alert('File size exceeds 2 MiB');
                Swal.fire('แจ้งเตือน!', 'ขนาดไฟล์ต้องน้อยกว่าหรือเท่ากับ 2 MB', 'warning');
                document.getElementById("imageFile").value = "";
                // $(file).val(''); //for clearing with Jquery
            } else {
                $('#showImg').show();
                resizeImages(event.target.files[0],function(url){
                    $('#imgbase64').val(url);
                });

                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#output').attr('src', e.target.result);
                }
                reader.readAsDataURL(event.target.files[0]);
            }
          
        };

        function resizeImages(file, com) {
            var reader = new FileReader();
            reader.onload = function (e) {
                var img = new Image();
                img.onload = function () {
                    com(resizeInCanvas(img));
                };
                img.src = e.target.result;
            }
            reader.readAsDataURL(file);
        }

        function resizeInCanvas(img) {
            var perferedWidth = 800;
            var ratio = perferedWidth / img.width;
            var canvas = $("<canvas>")[0];
            canvas.width = img.width * ratio;
            canvas.height = img.height * ratio;
            var ctx = canvas.getContext("2d");
            ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
            var imgfile = canvas.toDataURL('image/jpeg', 0.5);
            return imgfile;
        }

        function validateSize(input) {
            const fileSize = input.files[0].size / 1024 / 1024; // in MiB
            if (fileSize > 1) {
                // alert('File size exceeds 2 MiB');
                Swal.fire('แจ้งเตือน!', 'ขนาดไฟล์ต้องน้อยกว่าหรือเท่ากับ 1 MB', 'warning');
                document.getElementById("imageFile").value = "";
                // $(file).val(''); //for clearing with Jquery
            } else {
                // Proceed further
            }
        }

        function destroy(id){
             Swal.fire({
                    title: 'คุณมั่นใจหรือไม่ ?',
                    text: 'ที่จะลบตัวแทนจำหน่ายนี้',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#7A7978',
                    confirmButtonText: 'ตกลง',
                    cancelButtonText: 'ยกเลิก',

                }).then((result) => {
                    if (result.isConfirmed) {
                            openLoading();
                            $.post("{{  route('admin.agent.destroy')  }}", data = {
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
