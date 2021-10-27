@extends('layouts.master')

@section('title') จัดการออเดอร์ | Admin - HB MOBILE  @endsection

@section('css')

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Dashboard @endslot
        @slot('title') จัดการออเดอร์ @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body"> 

                    <h4 class="card-title">จัดการออเดอร์</h4>
                    <br>
 
                    <table id="simple_table" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>เลขออเดอร์</th>
                                <th>ชื่อลูกค้า</th>
                                <th>วันที่</th>
                                <th>จำนวนเงิน</th>
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
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel"><span id="modal_title"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>

                </div>
                <div class="modal-body">
                    <div class="mb-3" id="showImg">
                            <label for="image" class="form-label text-primary">หลักฐานการชำระเงิน </label>
                            <img id="output" max-width="300" style="max-height: 300px;" class="img-responsive form-control" />
                    </div>

                    <div class="form-check form-check-info mb-3">
                        <input class="form-check-input" type="checkbox"  name="is_recommend" id="formCheckcolor3" checked>              
                        <label classz="form-check-label" for="formCheckcolor3"> สินค้าแนะนำ </label>
                    </div>
 
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
                    "url": "{{ route('admin.order.show') }}",
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
                        "data": "code",
                    },
          
                     {
                        "data": "user",
                         "render": function (data, type, full) {
                             
                            return data ? data.name : '';
                        }
                    },
                    {
                        "data": "created_at",
                         "render": function (data, type, full) {
                            return moment(data).format('DD-MM-YYYY HH:mm');
                        }
                    },

                    {
                        "data": "total_amount",
                         "render": function (data, type, full) {
                            return data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        }
                    },

                    {
                        "data": "status",
                        "render": function (data, type, full) {
                            var text = '';

                        

                            switch (data) {
                                case 0:
                                    text = `<span class="badge badge-soft-dark"><i class="bx bx-loader"></i> รออัพโหลดสลิป </span>`;
                                    break;

                                case 1:
                                    text = `<span class="badge badge-soft-warning"><i class="bx bx-upload"></i> อัพโหลดสลิปแล้ว </span>`;
                                    break;

                                case 2:
                                    text = `<span class="badge badge-soft-primary"> ยืนยันการชำระเงิน </span>`;
                                    break;

                                case 3:
                                    text = `<span class="badge badge-soft-info"><i class="bx bx-run"></i>  กำลังแพ็คสินค้า </span>`;
                                    break;
                                
                                case 4:
                                    text = `<span class="badge badge-soft-success"><i class="bx bx-check-double"></i>  จัดส่งแล้ว </span>`;
                                    break
                                   
                                case 5:
                                    text = `<span class="badge rounded-pill bg-danger" >จัดส่งไม่สำเร็จ </span>`;
                                    break;

                                case 6:
                                    text = `<span class="badge rounded-pill bg-danger" >ยกเลิกรายการ </span>`;
                                    break;
                            
                                default:
                                    break;
                            }
                            return text;
                        }
                    },
                    
                    {
                        "data": "id",
                        "render": function (data, type, full) {
                            var obj = JSON.stringify(full);
                            var button = `

                            <a type="button" class="btn btn-sm btn-info" href="/admin/order/${data}"><i class="bx bx-search-alt-2"></i> </a>
                             <button type="button" class="btn btn-sm btn-danger" onclick="destroy(${data})"><i class="bx bx-trash"></i> </button>
                            `;
                            return button;

                        }
                    },
                    
                ],
            });
        });



        function destroy(id){
             Swal.fire({
                    title: 'คุณมั่นใจหรือไม่ ?',
                    text: 'ที่จะลบออเดอร์นี้',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#7A7978',
                    confirmButtonText: 'ตกลง',
                    cancelButtonText: 'ยกเลิก',

                }).then((result) => {
                    if (result.isConfirmed) {
                            openLoading();
                            $.post("{{  route('admin.order.destroy')  }}", data = {
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
