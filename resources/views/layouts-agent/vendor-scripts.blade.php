<!-- JAVASCRIPT -->
<script src="{{ URL::asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/metismenu/metismenu.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/node-waves/node-waves.min.js')}}"></script>


@yield('script')

<!-- App js -->
<script src="{{ URL::asset('assets/js/app.min.js')}}"></script>

<!-- Required datatable js -->
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/tui-time-picker/tui-time-picker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/tui-date-picker/tui-date-picker.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/moment/moment.min.js') }}"></script>

<!-- Sweet Alerts js -->
<script src="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- Sweet alert init js-->
<script src="{{ URL::asset('/assets/js/pages/sweet-alerts.init.js') }}"></script>

<!-- select 2 plugin -->
{{-- <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script> --}}

<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>

<!-- dropzone plugin -->
<script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js') }}"></script>

<!-- init js -->
<script src="{{ URL::asset('/assets/js/pages/ecommerce-select2.init.js') }}"></script>

<script src="{{ URL::asset('/assets/js/image-uploader.min.js') }}"></script>

<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>

<script>
    openLoading = () => {
        $('body').prepend(`
            <div class="loader-bg ">
                <div class="loader ">Loading...</div>
                <span class="loader-load"></span>
            </div>
        `);
        $( "#loader" ).delay(10).fadeIn();
        $( "#loader" ).addClass( "loader" );
    }

    closeLoading = () => {
        $("#loader").delay(10).fadeOut();
        $('.loader-bg').remove();
    }

    $(document).ready(function () {

            var simple = '';
            getOrderCount();

    });

    function getOrderCount() {
        $.post("{{  route('admin.order.get-order-count')  }}", data = {
                _token: '{{ csrf_token() }}',
            },
            function (res) {
                console.log(res)
                $('#count_order').text(res);
            },
        );
    }

    $('#change-password').submit(function(e){
            e.preventDefault();
            let formData = new FormData(this);
            var password = $('#password').val();
            var passwordConfirm = $('#password-confirm').val();
   
            if(password == '' || password == null || passwordConfirm == '' || passwordConfirm == null ){
                Swal.fire('ผิดพลาด!', 'กรุณากรอกข้อมูลให้ครบถ้วน', 'warning');
            }else{
                openLoading();
                $.ajax({
                    type: "method",
                    method: "POST",
                    url: "{{ route('change-password') }}",
                    processData: false,
                    contentType: false,
                    data: formData,
                    success: function (res) {
                        Swal.fire(res.title, res.msg, res.status);
                        closeLoading();
                    }
                });
            }
          
        });

</script>

@yield('script-bottom')
