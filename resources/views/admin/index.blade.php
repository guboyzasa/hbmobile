@extends('layouts.master')

@section('title')
@lang('translation.Dashboards')
@endsection

@section('content')
<div class="card" style="border-radius: 20px">
    <div class="card-body">
        <div class="col-12 p-4 bg-primary bg-soft shadow-md mb-1" style="border-radius: 20px">
            <div style="text-align: right;color:black" id="clock" onload="currentTime()"></div>
            <h2 class="text-primary">Welcome to admin !</h2>
            <p>HB MOBILE SERVICES Dashboard</p>
        </div>
    </div>
</div>

{{-- <div class="row"> --}}
    <div class="col-xl-12">
        {{-- <div class="row"> --}}
            <div class="col-sm-3 text-center">
                {{-- <div class="card-body"> --}}
                    <html>
                    <head>
                        <link href="https://cdn.syncfusion.com/ej2/ej2-base/styles/material.css" rel="stylesheet"
                            type="text/css" />
                        <link href="https://cdn.syncfusion.com/ej2/ej2-buttons/styles/material.css" rel="stylesheet"
                            type="text/css" />
                        <link href="https://cdn.syncfusion.com/ej2/ej2-calendars/styles/material.css" rel="stylesheet"
                            type="text/css" />
                        <script src="https://cdn.syncfusion.com/ej2/ej2-base/dist/global/ej2-base.min.js"
                            type="text/javascript"></script>
                        <script src="https://cdn.syncfusion.com/ej2/ej2-inputs/dist/global/ej2-inputs.min.js"
                            type="text/javascript"></script>
                        <script src="https://cdn.syncfusion.com/ej2/ej2-buttons/dist/global/ej2-buttons.min.js"
                            type="text/javascript"></script>
                        <script src="https://cdn.syncfusion.com/ej2/ej2-lists/dist/global/ej2-lists.min.js"
                            type="text/javascript"></script>
                        <script src="https://cdn.syncfusion.com/ej2/ej2-popups/dist/global/ej2-popups.min.js"
                            type="text/javascript"></script>
                        <script src="https://cdn.syncfusion.com/ej2/ej2-calendars/dist/global/ej2-calendars.min.js"
                            type="text/javascript">
                        </script>
                    </head>

                    <body>
                        <div id="element"></div>
                        <script>
                            var calendar = new ej.calendars.Calendar();
                                    calendar.appendTo('#element')
                        </script>
                    </body>

                    </html>
                {{-- </div> --}}
            </div>
            
        {{-- </div> --}}
    </div>
{{-- </div> --}}
@endsection

@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
<script>
    function currentTime() {
            let date = new Date();
            let hh = date.getHours();
            let mm = date.getMinutes();
            let ss = date.getSeconds();
            let session = "AM";

            if (hh == 0) {
                hh = 12;
            }
            if (hh > 12) {
                hh = hh - 12;
                session = "PM";
            }

            hh = (hh < 10) ? "0" + hh : hh;
            mm = (mm < 10) ? "0" + mm : mm;
            ss = (ss < 10) ? "0" + ss : ss;

            let time = hh + ":" + mm + ":" + ss + " " + session;

            document.getElementById("clock").innerText = time;
            let t = setTimeout(function() {
                currentTime()
            }, 1000);
        }
        currentTime();
</script>
@endsection