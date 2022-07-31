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
            getRepairCount();

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
    function getRepairCount() {
        $.post("{{  route('admin.repair.get-repair-count')  }}", data = {
                _token: '{{ csrf_token() }}',
            },
            function (res) {
                console.log(res)
                $('#count_repair').text(res);
            },
        );
    }

</script>

<!-- icon -->
<script src="https://kit.fontawesome.com/04cb91f376.js" crossorigin="anonymous"></script>
<script>
    function toThaiDateString(date) {
    let monthNames = [
        "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน",
        "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม.",
        "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"
    ];

    let year = date.getFullYear() + 543;
    let month = monthNames[date.getMonth()];
    let numOfDay = date.getDate();

    return `${numOfDay} ${month} ${year}, `
    }
    let date1 = new Date();
    document.getElementById("date").innerHTML= toThaiDateString(date1);
</script>
<script>
    function currentTime() {
            let date = new Date();
            let hh = date.getHours();
            let mm = date.getMinutes();
            let ss = date.getSeconds();

            hh = (hh < 10) ? "0" + hh : hh;
            mm = (mm < 10) ? "0" + mm : mm;
            ss = (ss < 10) ? "0" + ss : ss;

            let time = hh + ":" + mm + ":" + ss;

            document.getElementById("clock").innerText = time;
            let t = setTimeout(function() {
                currentTime()
            }, 1000);
        }
        currentTime();
</script>

@yield('script-bottom')
