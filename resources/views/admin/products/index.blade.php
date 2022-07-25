@extends('layouts.master')

@section('title') จัดการสินค้า | Admin - HB Mobile Services @endsection


@section('css')
<style>
    div.image-area {
        width: 50%;
        /* max-width : 100%; */
        margin: 0 auto;
        /* to center the container */
        padding: 4px;
        cursor: pointer;
        position: relative;
    }

    .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        opacity: 0;
        transition: .5s ease;
        cursor: pointer;
    }

    div.image-area:hover .overlay {
        opacity: 1;
    }

    div.image:hover .overlay {
        opacity: 1;
    }


    .imgCar {
        display: block;
        width: 100%;
        height: 100px;
        padding: 4px;
        border-radius: 4px;
        cursor: pointer;
    }

    .icon-remove {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .css {
        transition: transform .2s;
        box-shadow: 5px 5px 10px grey;
        border-radius: 5px;
    }

    .css:hover {
        transform: scale(0.95);
        box-shadow: 1px 1px 5px grey;
        border-radius: 5px;
    }


    .img {
        transition: transform .2s;
        box-shadow: 5px 5px 20px grey;
        border-radius: 5px;
    }
</style>
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Dashboard @endslot
@slot('title') จัดการสินค้า @endslot
@endcomponent

<div class="row">

    <div class="col-md-12">
        <div class="col-md-12">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
                <i class="bx bx-check-double"></i>

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
    <div class="col-12">
        <div class="card shadow-lg" style="border-radius: 10px">
            <div class="card-body">
                <button type="button" style="float: right;" class="btn btn-success create_btn"><i
                        class="bx bx-plus"></i> เพิ่มสินค้า </button>
                <h4 class="card-title">จัดการสินค้า</h4>
                <br>
                <br>
                <div class="table">
                <table id="simple_table" class="table table-bordered w-100">
                    <thead>
                        <tr class="table-secondary">
                            <th>รูป</th>
                            <th>ชื่อ</th>
                            <th>รหัส</th>
                            <th>ราคา</th>
                            <th>หมวดหมู่</th>
                            <th>แบรนด์</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
<!-- Modal Add Product -->
<div class="modal fade update-profile" id="simpleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel"><span id="modal_title"></span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data" id="product-cat-form">
                    @csrf
                    <input type="hidden" class="formInput" name="id" value="" id="id">
                    <div class="mb-3">
                        <label for="name" class="form-label">ชื่อสินค้า</label>
                        <input type="text" class="formInput form-control" id="name" value="" name="name"
                            placeholder="กรอกชื่อสินค้า" required>
                    </div>

                    <div class="mb-3">
                        <label for="sku" class="form-label">รหัสสินค้า</label>
                        <input type="text" class="formInput form-control" id="sku" value="" name="sku"
                            placeholder="กรอกรหัสสินค้า" required>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">ราคาสินค้า </label>
                        <input type="number" autocomplete="off" class="form-control formInput" name="price" step="0.01"
                            min="0.01" id="price" placeholder="กรอกราคาสินค้า" required>
                    </div>

                    <div class="mb-3">
                        <label for="cat" class="form-label">หมวดหมู่สินค้า </label>
                        <select name="cat" id="cat" class="form-control" required>
                            <option value=""> -- เลือกหมวดหมู่สินค้า -- </option>
                            @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}"> {{ $cat->name }} </option>
                            @endforeach

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="brand" class="form-label">แบรนด์สินค้า </label>
                        <select name="brand" id="brand" class="form-control" required>
                            <option value=""> -- เลือกแบรนด์สินค้า -- </option>
                            @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}"> {{ $brand->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">รูปปกสินค้า </label>
                        <input type="file" onchange="validateSize(this)" class="form-control formInput" accept="image/*"
                            name="imageFile2" id="imageFile2" placeholder="กรุณาเลือกรูปภาพ">
                    </div>
                    <div class="mb-3" id="showImg">
                        <label for="image" class="form-label">รูปล่าสุด </label>
                        <img id="output" max-width="300" style="max-height: 300px;"
                            class="img-responsive form-control" />
                    </div>
                    <div class="mt-3 d-grid">
                        <br>
                        <button class="btn btn-primary waves-effect waves-light" type="submit" form="product-cat-form"> บันทึก </button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal Edit Product -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel"><span id="edit_modal_title"></span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow-lg" style="border-radius: 10px">
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('admin.product.store-edit') }}"  method="POST" enctype="multipart/form-data" id="product-detail-form">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-4" style="text-align: center;">
                                            <label for="name">รูปหน้าปกสินค้า</label><br>
                                            <a style="text-align:center;" href="#" onclick='showInfoImg(img)'>
                                                <img src="" width="100%"
                                                    class="css image img grid-item"
                                                    style="margin-top:1rem; margin-bottom:1rem; max-width: 100px;" id="outputProduct">
                                            </a>
                                            <input type="file" onchange="validateSize(this)"
                                                class="form-control formInput" accept="image/*" name="imageFile"
                                                id="imageFile" placeholder="กรุณาเลือกรูปภาพ">
                                        </div>
                                    </div>
                                   
                                    <input type="hidden" name="id" value="id" id="id_product">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="name">ชื่อสินค้า</label>
                                                <input id="nameEdit" name="name" type="text" class="form-control"
                                                    value="name" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="sku">รหัสสินค้า</label>
                                                <input id="skuEdit" name="sku" type="text" class="form-control"
                                                    value="sku" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="price">ราคา</label>
                                                <input id="priceEdit" name="price" type="number" step="0.01" min="0.01"
                                                    class="form-control" value="price" required>
                                            </div>
                                            <div class="mb-3">
                                                <div class="row">

                                                    <div class="col-6">
                                                        <div class="form-check form-check-primary mb-3">
                                                    
                                                            <input class="form-check-input" type="checkbox"
                                                                name="is_active" id="formCheckcolor1">
                                                          
                                                            <label class="form-check-label" for="formCheckcolor1">
                                                                เปิดโชว์สินค้า </label>
                                                        </div>

                                                        <div class="form-check form-check-success mb-3">
                                                         
                                                            <input class="form-check-input" type="checkbox"
                                                                name="is_stock" id="formCheckcolor2">
                                                         
                                                            <label class="form-check-label" for="formCheckcolor2">
                                                                มีสินค้าใน Stock </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="form-check form-check-info mb-2">
                                                            
                                                            <input class="form-check-input" type="checkbox"
                                                                name="is_recommend" id="formCheckcolor3">
                                                        
                                                            <label classz="form-check-label" for="formCheckcolor3">
                                                                สินค้าแนะนำ </label>
                                                        </div>

                                                        <div class="form-check form-check-warning mb-3">
                                                           
                                                            <input class="form-check-input" type="checkbox"
                                                                name="is_new" id="formCheckcolor4">
                                                   
                                                            <label class="form-check-label" for="formCheckcolor4">
                                                                สินค้าใหม่ </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="control-label">หมวดหมู่สินค้า</label>
                                                <select class="form-control " id="catEdit" name="cat">
                                   
                                                    @foreach ($categories as $cat)
                                                  
                                                        <option value="{{ $cat->id }}"> {{ $cat->name }}</option>
                                      
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label class="control-label">แบรนด์สินค้า</label>
                                                <select class="form-control" id="brandEdit" name="brand">
                                                   
                                                    @foreach ($brands as $brand)
                                                    
                                                        <option  value="{{ $brand->id }}"> {{ $brand->name }}</option>
                                                 
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="productdesc">รายละเอียดสินค้า</label>
                                                <textarea class="form-control" id="productdescEdit" name="productdesc"
                                                    rows="5"> {{ @$product->detail }} </textarea>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="d-flex flex-wrap gap-2" style="float: right;">
                                        <button type="submit" class="btn btn-warning waves-effect waves-light" form="product-detail-form">
                                            บันทึกการแก้ไข
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                        <i class="bx bx-check-double"></i>

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
                        {{-- <div class="card shadow-lg" style="border-radius: 10px">
                            <div class="card-body">
                                <h4 class="card-title mb-3">รูปตัวอย่างสินค้า (ขนาดไม่เกิน 2 mb และ ไม่เกิน 4 รูป)</h4>
                                <form action="{{ route('admin.product.update') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" id="id_product_img">
                                    <div class="form-group image row" id="image-area">
                                        <div class="form-group image row" id="show-image-area">

                                        </div>
                                        <div class="col-md-3 col-xs-12 text-center">

                                            <i class="bx bx-plus text-success" id="inputImage"
                                                style="cursor: pointer; font-size: 8rem;"></i>
                                            <br>
                                            <h5>เพิ่มรูปภาพ</h5>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap gap-2" style="float: right;">
                                        <button type="submit" class="btn btn-success waves-effect waves-light">
                                            อัพโหลรูปภาพ </button>
                                    </div>
                                </form>
                            </div>

                        </div>  --}}
                        <!-- end card-->

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>
</div><!-- /.modal Edit -->

<!--  Picture modal example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" id="infoModal">
    <div class="modal-dialog modal-md shadow-lg" style="border-radius: 10px">
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

        // $('#product-detail-form').submit(function(e){
        //     var name = $('#name').val();
        //     if(name == '' || name == null){
        //         Swal.fire('ผิดพลาด!', 'กรุณากรอกข้อมูลให้ครบถ้วน', 'warning');
        //     }else{
        //         openLoading();
        //         e.preventDefault();
        //         let formData = new FormData(this);
        //         console.log('OK');
        //         $.ajax({
        //             type: "method",
        //             method: "POST",
        //             url: "{{ route('admin.product.store-edit') }}",
        //             processData: false,
        //             contentType: false,
        //             data: formData,
        //             success: function (res) {
        //                 console.log(res);
                       
        //                 Swal.fire(res.title, res.msg, res.status);

        //                 closeLoading();
        //             }
        //         });
        //     }
          
        // });


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
                    "url": "{{ route('admin.product.show') }}",
                    "method": "POST",
                    "data": {
                        "_token": "{{ csrf_token()}}",
                    },
                },
                'columnDefs': [
                    {
                        "targets": [0,1,2,3,4,5,6,7],
                        "className": "text-center",
                    },
                ],
                "columns": [
                    {
                        "data": "id",
                        "render": function (data, type, full) {

                            var text = `<img src="" alt="" class="avatar-md h-auto d-block rounded center">`;
                            if(full.img){
                                text = `<a style="text-align:center;" href="#" onclick="showInfoImg('${full.img}')"><img src="{{ URL::asset('get-content/${full.img}') }}" alt="" class="rounded avatar-md"></a>`;
                            }

                            return text;
                        }
                    },
              
                    {
                        "data": "name",
                    },
                    {
                        "data": "sku",
                    },
                    {
                        "data": "price",
                    },

                    {
                        "data": "category.name",
                    },

                    {
                        "data": "brand.name",
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
                             <button type="button" class="btn btn-sm btn-warning" onclick='showInfoProduct(${obj})'><i class="bx bx-edit"></i></button>
                             <a href="/admin/product/detail/${data}" class="btn btn-sm btn-info"><i class="bx bx-search-alt-2"></i></a>
                             `;
                            return button; 
                            //<button type="button" class="btn btn-sm btn-danger" onclick='destroy(${data})'><i class="bx bx-trash"></i></button>
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
            $('#modal_title').text('เพิ่มสินค้าใหม่');
            $('.formInput').val('');
            $('#output').attr('src','');
            $('#showImg').hide();
            $('#simpleModal').modal("show");
        });

        $('#product-cat-form').submit(function(e){
            var name = $('#name').val();
            if(name == '' || name == null){
                Swal.fire('ผิดพลาด!', 'กรุณากรอกข้อมูลให้ครบถ้วน', 'warning');
            }else{
                openLoading();
                e.preventDefault();
                let formData = new FormData(this);
                console.log('OK');
                $.ajax({
                    type: "method",
                    method: "POST",
                    url: "{{ route('admin.product.store') }}",
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
                $.post("{{  route('admin.product.change-status')  }}", data = {
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

        function destroy(id){
             Swal.fire({
                    title: 'คุณมั่นใจหรือไม่ ?',
                    text: 'ที่จะลบสินค้าชิ้นนี้',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#7A7978',
                    confirmButtonText: 'ตกลง',
                    cancelButtonText: 'ยกเลิก',

                }).then((result) => {
                    if (result.isConfirmed) {
                            openLoading();
                            $.post("{{  route('admin.product.destroy')  }}", data = {
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

        function showInfo(obj){

            $('#modal_title').text('แก้ไขสินค้า');
            document.getElementById("imageFile").value = "";
            $('#imgbase64').val('');
            $('#showImg').show();
            $('#id').val(obj.id);
            $('#name').val(obj.name);
            $('#output').attr('src', `{{ URL::asset('get-content/${obj.img}') }}`);
            $('#simpleModal').modal("show");
   
        }

        function showInfoProduct(obj){

            $('#edit_modal_title').text('แก้ไขสินค้า');
            document.getElementById("imageFile").value = "";
            $('#imgbase64').val('');
            $('#showImgEdit').show();
            $('#id_product').val(obj.id);
            $('#id_product_img').val(obj.id);
            
            $('#nameEdit').val(obj.name).trigger('change');
            $('#catEdit').val(obj.cat);
            $('#brandEdit').val(obj.product_brand_id).trigger('change');
            $('#catEdit').val(obj.product_category_id).trigger('change');
            $('#outputProduct').attr('src', `{{ URL::asset('get-content/${obj.img}') }}`);
            $('#editModal').modal("show");
            $('#priceEdit').val(obj.price).trigger('change');
            $('#skuEdit').val(obj.sku).trigger('change');
            $('#productdescEdit').val(obj.detail);
            $('#formCheckcolor4Edit').val(obj.is_new).trigger('change');

            if(obj.is_active){
                $('#formCheckcolor1').prop('checked', true);
            }else{
                $('#formCheckcolor1').prop('checked', false);
            }

            if(obj.is_stock){
                $('#formCheckcolor2').prop('checked', true);
            }else{
                $('#formCheckcolor2').prop('checked', false);
            }
            
            if(obj.is_recommend){
                $('#formCheckcolor3').prop('checked', true);
            }else{
                $('#formCheckcolor3').prop('checked', false);
            }

            if(obj.is_new){
                $('#formCheckcolor4').prop('checked', true);
            }else{
                $('#formCheckcolor4').prop('checked', false);
            }
        
            $('#show-image-area').empty()
           if(obj.product_images != null)
           {
            let textImg= ''
            let fullPath = ''
            let arrayImg = obj.product_images
            arrayImg.forEach(element => {
                fullPath = `get-content/${element.img}`
                textImg =  `{{ URL::asset('${fullPath}') }} `
                $('#show-image-area').prepend(`
                    <div class='col-md-3 col-xs-12 text-center' id='img-${element.id}'
                            onclick="removeimage('${element.id}')">

                            <img src="${textImg}" width="100%"
                                class="css image img grid-item" style="margin-top:2.5rem; margin-bottom:2.5rem;">
                            <div class="overlay">
                                <div class="icon-remove"><i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
            `)
                
            });
          
           }
      

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

<script>
    $('#inputImage').click(function(){
        console.log('OK');
        const elementHTML = `img-${Date.now()}`;
        const imageArea = $('#image-area');
        imageArea.prepend(`
            <div class="col-md-3 col-xs-12 text-center removeImg" style="display:none;" id="${elementHTML}">                    
                <input  onchange="validateSize(this)"  type="file" style="display:none;" class="${elementHTML}">
            </div>
        `);
        $(`.${elementHTML}`).click();
        $('input[type="file"]').change(function(e){
            const fileSize = this.files[0].size / 1024 / 1024; // in MiB
            if (fileSize <= 1) {
                if (this.files.length > 0) {
                    $.each(this.files, function (i, v) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            var img = new Image();
                            img.src = e.target.result;
                            img.onload = function () {

                                // CREATE A CANVAS ELEMENT AND ASSIGN THE IMAGES TO IT.
                                var canvas = document.createElement("canvas");

                                // RESIZE THE IMAGES ONE BY ONE.
                                img.width = (img.width * 80) / 100
                                img.height = (img.height * 80) / 100
        
                                var ctx = canvas.getContext("2d");
                                ctx.clearRect(0, 0, canvas.width, canvas.height);
                                canvas.width = img.width;
                                canvas.height = img.height;

                                ctx.drawImage(img, 0, 0, img.width, img.height);
                                dataUrl = canvas.toDataURL('image/jpeg');

                                // SHOW THE IMAGES OF THE BROWSER.
                                $(`#${elementHTML}`).append($('<img width="50%" class="css image img grid-item" style="margin-top:2.5rem; margin-bottom:2.5rem;">').attr('src', dataUrl)).css('display','block');                            
                                $(`#${elementHTML}`).append($('<div class="overlay"><div class="icon-remove"><i class="fa fa-trash text-danger" aria-hidden="true"></i></div></div>')); 
                                $(`#${elementHTML}`).append($('<input type="hidden" class="base64Images" name="base64Images[]" id="base64Images">').val(dataUrl)); 

                            }
                        };
                        reader.readAsDataURL(this);
                    });
                }
            }else{
                Swal.fire('แจ้งเตือน!', 'ขนาดไฟล์ต้องน้อยกว่าหรือเท่ากับ 1 MB', 'warning');
            }
        });

        $('.removeImg').click(function(){
            $(this).remove();
        });

});

function removeimage(id){
            console.log(id);
            var name = '#img-' + id;
           
            console.log(name);

                Swal.fire({
                    title: 'คุณมั่นใจหรือไม่ ?',
                    text: 'ที่จะลบรูปนี้',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#7A7978',
                    confirmButtonText: 'ตกลง',
                    cancelButtonText: 'ยกเลิก',

                }).then((result) => {
                    if (result.isConfirmed) {
                            openLoading();
                            $.post("{{  route('admin.product.destroy-img')  }}", data = {
                                    _token: '{{ csrf_token() }}',
                                    id: id,
                                },
                                function (res) {
                               
                                    closeLoading();
                                    Swal.fire(res.title, res.msg, res.status);
                                    $(name).remove();
                                },
                            );
                      
                    }
                });
        }
</script>

@endsection