@extends('layouts.master')

@section('title') รายละเอียดสินค้า | Admin - HB Mobile Services @endsection

@section('css')
<style>
    div.image-area {
        width     : 50%;
        /* max-width : 100%; */
        margin    : 0 auto; /* to center the container */
        padding   : 4px;
        cursor    : pointer;
        position  : relative;
    }

    .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        opacity: 0;
        transition: .5s ease;
        cursor : pointer;
    }

    div.image-area:hover .overlay {
            opacity: 1;
    }
    div.image:hover .overlay {
            opacity: 1;
    }
    

    .imgCar {
        display: block;
        width  : 100%;
        height : 100px;
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
        @slot('title') รายละเอียดสินค้า : {{ $product->name }} @endslot
    @endcomponent

    {{-- <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body"> 
                 

                </div>
            </div>
        </div> <!-- end col -->
    </div> --}}
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
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.product.index') }}" class="btn btn btn-success pull-right" style="float: right;"><i class="fa fa-arrow-left" aria-hidden="true"></i> ย้อนกลับ </a>

                    <h4 class="card-title">ข้อมูลสินค้า : {{ $product->name }} | SKU : {{ $product->sku }}</h4>
                    {{-- <p class="card-title-desc">Fill all information below</p> --}}
                    <br>
                   
                    <form class="form-horizontal" action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data" id="product-detail-form">

                            <div class="row">
                                <div class="mb-4"></div>
                                <div class="mb-4" style="text-align: center;">
                                    <label for="name">รูปหน้าปกสินค้า</label><br>
                                    <a style="text-align:center;" href="#" onclick='showImg("{{ $product->img }}")'>
                                    <img  src="{{ URL::asset('get-content/'.$product->img) }}" width="100%" class="css image img grid-item" style="margin-top:2.5rem; margin-bottom:2.5rem; max-width: 150px;">
                                    </a>
                                    <input type="file" onchange="validateSize(this)" class="form-control formInput" accept="image/*" name="imageFile" id="imageFile" placeholder="กรุณาเลือกรูปภาพ"  >
                                </div>
                                
                                <div class="mb-4"></div>
                             </div>
     
                        <br>
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="name">ชื่อสินค้า</label>
                                    <input id="name" name="name" type="text" class="form-control" value="{{ $product->name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="sku">รหัสสินค้า</label>
                                    <input id="sku" name="sku" type="text" class="form-control" value="{{ $product->sku }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="price">ราคา</label>
                                    <input id="price" name="price" type="number" step="0.01" min="0.01" class="form-control" value="{{ $product->price }}" required>
                                </div>
                                <div class="mb-3">
                                    <div class="row">

                                        <div class="col-6">
                                            <div class="form-check form-check-primary mb-3">
                                                @if ($product->is_active)
                                                    <input class="form-check-input" type="checkbox" name="is_active" id="formCheckcolor1" checked>
                                                @else
                                                    <input class="form-check-input" type="checkbox" name="is_active" id="formCheckcolor1" >
                                                @endif
                                                <label class="form-check-label" for="formCheckcolor1"> เปิดโชว์สินค้า </label>
                                            </div>

                                            <div class="form-check form-check-success mb-3">
                                                @if ($product->is_stock)
                                                    <input class="form-check-input" type="checkbox"  name="is_stock" id="formCheckcolor2" checked>
                                                @else
                                                    <input class="form-check-input" type="checkbox"  name="is_stock" id="formCheckcolor2" >
                                                @endif
                                                <label class="form-check-label" for="formCheckcolor2"> มีสินค้าใน Stock </label>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-check form-check-info mb-2">
                                                @if ($product->is_recommend)
                                                    <input class="form-check-input" type="checkbox"  name="is_recommend" id="formCheckcolor3" checked>
                                                @else
                                                    <input class="form-check-input" type="checkbox"  name="is_recommend" id="formCheckcolor3" >
                                                @endif
                                                <label classz="form-check-label" for="formCheckcolor3"> สินค้าแนะนำ </label>
                                            </div>

                                            <div class="form-check form-check-warning mb-3">
                                                @if ($product->is_new)
                                                    <input class="form-check-input" type="checkbox" name="is_new" id="formCheckcolor4" checked>
                                                @else
                                                    <input class="form-check-input" type="checkbox" name="is_new" id="formCheckcolor4" >
                                                @endif
                                               <label class="form-check-label" for="formCheckcolor4"> สินค้าใหม่ </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                           
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="control-label">หมวดหมู่สินค้า</label>
                                    <select class="form-control " id="cat" name="cat">
                                        <option value="{{ $product->product_category_id }}" selected> {{ $product->category->name  }}</option>
                                        @foreach ($categories as $cat)
                                            @if ($cat->id != $product->product_category_id)
                                                <option value="{{ $cat->id }}"> {{ $cat->name }}</option>  
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="control-label">แบรนด์สินค้า</label>
                                    <select class="form-control" id="brand" name="brand">
                                        <option value="{{ $product->product_brand_id }}" selected> {{ $product->brand->name  }}</option>
                                        @foreach ($brands as $brand)
                                            @if ( $brand->id  != $product->product_brand_id)
                                                <option value="{{ $brand->id }}"> {{ $brand->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                   
                                <div class="mb-3">
                                    <label for="productdesc">รายละเอียดสินค้า</label>
                                    <textarea class="form-control" id="productdesc" name="productdesc" rows="5"> {{ $product->detail }} </textarea>
                                </div>

                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2" style="float: right;">
                            <button type="submit" class="btn btn-primary waves-effect waves-light"> บันทึก </button>
                            <a href="{{ route('admin.product.index') }}" class="btn btn-secondary waves-effect waves-light"> ยกเลิก </a>
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
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">รูปสินค้าเพิ่มเติม (ขนาดไม่เกิน 2 mb และ ไม่เกิน 4 รูป)</h4>
                                    <form action="{{ route('admin.product.update') }}"  method="POST" enctype="multipart/form-data">
                                                <div class="d-flex flex-wrap gap-2" style="float: right;">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light"> อัพโหลรูปภาพ </button>
                                                </div>
                                                
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $product->id }}">
                                                <div class="form-group image row" id="image-area">
                                                        @if(isset($product->productImages))
                                                            @foreach($product->productImages  as  $img)
                                                              
                                                                <div class='col-md-3 col-xs-12 text-center' id='img-{{$img->id}}' onclick="removeimage('{{$img->id}}')">  
                                                                  
                                                                    <img  src="{{ URL::asset('get-content/'.$img->img) }}" width="100%" class="css image img grid-item" style="margin-top:2.5rem; margin-bottom:2.5rem;">
                                                                      <div class="overlay"><div class="icon-remove"><i class="fa fa-trash text-danger" aria-hidden="true"></i></div></div>        
                                                                </div>
                                                            @endforeach
                                                        @endif

                                                    <div class="col-md-3 col-xs-12 text-center">
    
                                                        <i class="bx bx-plus text-success"  id="inputImage" style="cursor: pointer; font-size: 8rem;"></i> 
                                                        <br>
                                                        <h5>เพิ่มรูปภาพ</h5>
                                                    </div>
                                                </div>
                                    </form>
                </div>

            </div> <!-- end card-->

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
                        <img id="output1" max-width="300" style="max-height: 500px;" class="img-responsive form-control" />
                  </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  
@endsection
@section('script')


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
</script>
<script>

        function showImg(img){
            console.log(img);
                $('#infoModal').modal('show');
                $('#output1').attr('src', `{{ URL::asset('get-content/${img}') }}`);
        }

        $(document).ready(function () {

            var simple = '';
            $('.input-images').imageUploader();
            
        });
        
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

        $('#product-detail-form').submit(function(e){
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
                       
                        Swal.fire(res.title, res.msg, res.status);

                        closeLoading();
                    }
                });
            }
          
        });

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

        function validateSize(input) {
            const fileSize = input.files[0].size / 1024 / 1024; // in MiB
            if (fileSize > 2) {
                // alert('File size exceeds 2 MiB');
                Swal.fire('แจ้งเตือน!', 'ขนาดไฟล์ต้องน้อยกว่าหรือเท่ากับ 2 MB', 'warning');
                // $(file).val(''); //for clearing with Jquery
            } else {
                // Proceed further
            }
        }

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

        // function validateSize(input) {

        //     const fileSize = input.files[0].size / 1024 / 1024; // in MiB
        //     if (fileSize > 1) {
        //         // alert('File size exceeds 2 MiB');
        //         Swal.fire('แจ้งเตือน!', 'ขนาดไฟล์ต้องน้อยกว่าหรือเท่ากับ 1 MB', 'warning');
        //         document.getElementById("imageFile").value = "";
        //         // $(file).val(''); //for clearing with Jquery
        //     } else {
        //         // Proceed further
        //     }
        // }



</script>
  
@endsection
