@extends('layouts.master')

@section('title') สร้างตัวแทนจำหน่าย | Admin - DissingThailand @endsection

@section('css')
<style>
     .select2-container {

        z-index: 1;

        
    }

    .my-swal {
        z-index: 100000;!important    
    }

  
</style>
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Dashboard @endslot
        @slot('title') สร้างตัวแทนจำหน่าย @endslot
    @endcomponent

    <div class="row">
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">จัดการ Account </h5>
                                            <p>สร้าง Username กับ Password ให้กับตัวแทนจำหน่าย</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{ URL::asset('/assets/images/profile-img.png') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                          
                                <div class="p-2">
                                    <form action="#" class="needs-validation" method="POST" autocomplete="off"  id="agent-form">
                                        @csrf
                                        <div class="mb-3">
                                             <label for="agent" class="form-label ">ตัวแทนจำหน่าย</label>
                                            <select name="agent" id="agent" class="form-control select2 formInput agent" style="width: 100% " required>
                                                <option value=""> -- เลือกตัวแทนจำหน่าย -- </option>
                                                @foreach ($agents as $agent)
                                                    <option value="{{ $agent->id }}">{{ $agent->name }} ({{ $agent->tel1 }})</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <input type="hidden" value="" id="agent_hidden"> 
                                        {{-- 
                                        <div class="mb-3">
                                            <label for="new_username" class="form-label">ชื่อผู้ใช้ (Username)</label>
                                            <input type="text" class="form-control" id="new_username"
                                                placeholder="กรอกชื่อผู้ใช้ (@agent)" name="new_username" autocomplete="none" required>
                                            <div class="invalid-feedback">
                                               กรอกชื่อผู้ใช้
                                            </div>
                                        </div> --}}
                                        <div class="mb-3">
                                            <label for="new_username" class="form-label">ชื่อผู้ใช้ (Username) </label> <span id="agent_status" class="badge badge-pill badge-soft-secondary font-size-11">  </span>
                                            <input type="text" class="form-control" id="new_username"
                                                placeholder="กรอกชื่อผู้ใช้ (example@agent)" name="new_username" autocomplete="new-password" required>
                                            <div class="invalid-feedback">
                                               กรอกชื่อผู้ใช้
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="new_password" class="form-label">รหัสผ่าน (Password)</label>
                                            <input type="password" class="form-control" name="new_password"  autocomplete="new-password"  id="new_password"
                                                placeholder="กรอกรหัสผ่าน" required>
                                            <div class="invalid-feedback">
                                               กรอกรหัสผ่าน
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="again_password" class="form-label">รหัสผ่านอีกครั้ง (Again password)</label>
                                            <input type="password" class="form-control"  name="again_password" autocomplete="none" id="again_password"
                                                placeholder="กรอกรหัสผ่าน(อีกครั้ง)" required>
                                            <div class="invalid-feedback">
                                                 กรอกรหัสผ่าน(อีกครั้ง)
                                            </div>
                                        </div>

                                        <div class="mt-4 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light"
                                                type="submit">บันทึก</button>
                                            <br>
                                            <a href="{{ route('admin.agent.index') }}" class="btn btn-secondary waves-effect waves-light">ย้อนกลับ</a>

                                        
                                        </div>


                                    </form>
                                </div>

                            </div>
                        </div>
      

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end row -->

  
@endsection
@section('script')
<script>

        $(document).ready(function () {
            var simple = '';
        });


        $('#agent-form').submit(function(e){
            var password = $('#new_password').val();
            var againPassword = $('#again_password').val();
            console.log(password)
            console.log(againPassword)
            e.preventDefault();
            if(password != againPassword){
                Swal.fire('ผิดพลาด!', 'กรุณากรอกรหัสผ่านให้ถูกต้อง', 'warning');
            }else{
                openLoading();
                let formData = new FormData(this);

                $.ajax({
                    type: "method",
                    method: "POST",
                    url: "{{ route('admin.agent.store-user') }}",
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


        $(".agent").change(function(){
                openLoading();
                    $.post("{{  route('admin.agent.check-agent')  }}", data = {
                                    _token: '{{ csrf_token() }}',
                                    id:   $(this).val(),
                                },
                                function (res) {
                                    console.log(res)
                                    if(res){
                                        $("#new_username").val(res);
                                        $('#agent_status').text('เข้าสู่ระบบแล้ว');
                                        $('#agent_status').addClass('badge-soft-success');
                                        $('#agent_status').removeClass('badge-soft-secondary');
                                    }else{
                                        $("#new_username").val('');
                                        $('#agent_status').text('ยังไม่เข้าสู่ระบบ');
                                        $('#agent_status').addClass('badge-soft-secondary');
                                        $('#agent_status').removeClass('badge-soft-success');
                                    }
                                    closeLoading();
                                   
                                },
                            );
        });

   

</script>
  
@endsection
