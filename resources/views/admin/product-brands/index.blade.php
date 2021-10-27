@extends('layouts.master')

@section('title') จัดการแบรนด์สินค้า | Admin - DissingThailand @endsection

@section('css')

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Dashboard @endslot
        @slot('title') จัดการแบรนด์สินค้า @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body"> 
                    <button type="button" style="float: right;" class="btn btn-primary create_btn" ><i class="bx bx-plus"></i> เพิ่มแบรนด์สินค้า </button>
                    <h4 class="card-title">จัดการแบรนด์สินค้า</h4>
                    <br>
                    
                    <br>
                    <table id="simple_table" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>รูป</th>
                                <th>ชื่อ</th>
                                <th>เปิด-ปิด</th>
                                <th>วันที่แก้ไขล่าสุด</th>
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

                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" id="product-cat-form">
                        @csrf
                        <input type="hidden" class="formInput" name="id" value="" id="id">
                        <div class="mb-3">
                            <label for="name" class="form-label">ชื่อ</label>
                            <input type="text" class="formInput form-control" id="name" value="" name="name"
                                placeholder="กรอกชื่อ" required>
                        </div>
              

                        <div class="mb-3">
                            <label for="image" class="form-label">รูปแบรนด์สินค้า </label>

                            <input type="file" onchange="validateSize(this)" class="form-control formInput" accept="image/*" name="imageFile" id="imageFile" placeholder="กรุณาเลือกรูปภาพ"  >

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
                    "url": "{{ route('admin.product-brand.show') }}",
                    "method": "POST",
                    "data": {
                        "_token": "{{ csrf_token()}}",
                    },
                },
                'columnDefs': [
                    {
                        "targets": [0,1,2,3,4],
                        "className": "text-center",
                    },
                ],
                "columns": [
                    {
                        "data": "id",
                        "render": function (data, type, full) {

                            var text = `<img src="" alt="" class="avatar-md h-auto d-block rounded center">`;
                            if(full.logo_img){
                                text = `<a href="#" onclick="showInfoImg('${full.logo_img}')"><img src="{{ URL::asset('get-content/${full.logo_img}') }}" alt="" class="avatar-md h-auto d-block rounded center"></a>`;
                            }

                            return text;
                        }
                    },
              
                    {
                        "data": "name",
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
                        "data": "updated_at",
                         "render": function (data, type, full) {
                            return moment(data).format('DD-MM-YYYY HH:mm');
                        }
                    },
                    
                    {
                        "data": "id",
                        "render": function (data, type, full) {
                            var obj = JSON.stringify(full);
                            var button = `

                            <button type="button" class="btn btn-sm btn-info" onclick='showInfo(${obj})'><i class="bx bx-pencil"></i> แก้ไข </button>
                            `;
                            return button;

                        }
                    },
                    
                ],
            });
        });


        // <button type="button" class="btn btn-sm btn-danger" onclick='destroy(${data})'> ลบ </button>
        $(".create_btn").click(function () {
      
            document.getElementById("imageFile").value = "";
            $('#imgbase64').val('');
            // document.getElementById("imgbase64").value = "";
            $('#modal_title').text('เพิ่มแบรนด์สินค้าใหม่');
            $('.formInput').val('');
            $('#output').attr('src','');
            $('#showImg').hide();
            $('#simpleModal').modal("show");
        });

        $('#product-cat-form').submit(function(e){
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
                    url: "{{ route('admin.product-brand.store') }}",
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
                $.post("{{  route('admin.product-brand.change-status')  }}", data = {
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

            $('#modal_title').text('แก้ไขแบรนด์สินค้า');
            document.getElementById("imageFile").value = "";
            $('#imgbase64').val('');
            $('#showImg').show();
            $('#id').val(obj.id);
            $('#name').val(obj.name);
            $('#output').attr('src', `{{ URL::asset('get-content/${obj.logo_img}') }}`);
            $('#simpleModal').modal("show");
   
        }

        var loadFile = function(event) {
            $('#showImg').show();
            resizeImages(event.target.files[0],function(url){
                $('#imgbase64').val(url);
            });

            var reader = new FileReader();
            reader.onload = function(e) {
                $('#output').attr('src', e.target.result);
            }
            reader.readAsDataURL(event.target.files[0]);
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
            var perferedWidth = 2048;
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
</script>
  
@endsection
