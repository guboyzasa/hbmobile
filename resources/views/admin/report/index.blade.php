@extends('layouts.master')

@section('title')
Report
| Admin - HB Mobile Services
@endsection

@section('content')
<div class="page-title-box d-sm-flex align-items-center justify-content-between">
    <h4 class="mb-sm-0 font-size-18">Report</h4>
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            Dashboard
            <li class="breadcrumb-item"></li>
            <li class="breadcrumb-item active">Report</li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="card shadow-lg" style="border-radius: 5px">
            <br>
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">ภาพรวม</h4>
                                <canvas id="chartPie"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">สถานะงานซ่อม</h4>
                                <canvas id="chartPies"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card shadow-sm" style="border-radius: 5px">
                            <div class="card-body">
                                <div class="text-dark">
                                    <label><strong style="font-size: 15px">รายการซ่อมล่าสุด</strong></label>
                                </div>
                                <table class="table dt-responsive nowrap w-100" id="repair_table">
                                    <thead>
                                        <tr>
                                            <th>รายการซ่อม</th>
                                            <th>ราคา</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($repairs as $row)
                                            <td>{{$row->model}} x {{$row->detail}}</td>
                                            <td>{{$row->price}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card shadow-sm" style="border-radius: 5px">
                            <div class="card-body">
                                <div class="text-dark">
                                    <label><strong style="font-size: 15px">รายการติดตั้งล่าสุด</strong></label>
                                </div>
                                <table class="table dt-responsive nowrap w-100" id="onsite_table">
                                    <thead>
                                        <tr>
                                            <th>รายการติดตั้ง</th>
                                            <th>ราคา</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($onsite as $row)
                                            <td>{{$row->model}} x {{$row->detail}}</td>
                                            <td>{{$row->price}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-xl-4">
                        <div class="card shadow-sm" style="border-radius: 5px">
                            <div class="card-body">
                                <div class="text-dark">
                                    <label><strong style="font-size: 15px">รายการอื่นๆล่าสุด</strong></label>
                                </div>
                                <table class="table dt-responsive nowrap w-100" id="repair_table">
                                    <thead>
                                        <tr>
                                            <th>รายการอื่นๆ</th>
                                            <th>ราคา</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div><!-- end row -->
        </div>
    </div>
</div>

@endsection

@section('script')

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>

{{-- pie All --}}
<script>
    // Pie Data
    var chartPie_Data = {
    labels: ['สินค้า','หมวดหมู่','แบรนด์','ลูกค้ายังไม่เข้าระบบ','ลูกค้าเข้าระบบแล้ว','ออเดอร์', 'ลงทะเบียนประกันสินค้า', 'ลงทะเบียนงานซ่อม', 'ลงทะเบียนงานติดตั้ง'],
    datasets: [{
        //label: 'Report Chart',
        data: [{{$countProduct}},{{$countProductCat}},{{$countProductBrand}},{{$countUserCus}},{{$countUserCustomer}},{{$countOrder}}, {{$countRegisterWarranty}}, {{$countRepair}}, {{$countOnsite}}],
        backgroundColor: [ '#f44336','#f1c232','#8fce00','#16537e','#3d85c6','#674ea7','#f13391','#fff2cc','#665151']
    }]
    }
    // Pie Chart
    var chartPie = document.getElementById('chartPie').getContext('2d');
    var chartPie_options = {
    cutoutPercentage: 0,
    cutoutPercentage: 50,
    legend: {position:'left',
        labels:{
        pointStyle:'circle',
        usePointStyle:true
        }
    }
    };
    if (chartPie) {
    new Chart(chartPie, {
    type: 'pie',
    data: chartPie_Data,
    options: chartPie_options
    });
    }
</script>

{{-- Pie Repair --}}
<script>
    // Pie Data
    var chartPie_Data = {
    labels: ['กำลังดำเนินการซ่อม', 'ซ่อมเสร็จแล้ว','ซ่อมไม่สำเร็จ'],
    datasets: [{
        //label: 'Report Chart',
        data: [{{$countRepair1}}, {{$countRepair2}}, {{$countRepair3}}],
        backgroundColor: [ '#cc0000','#6aa84f','#f1c232']
    }]
    }
    // Pie Chart
    var chartPie = document.getElementById('chartPies').getContext('2d');
    var chartPie_options = {
    cutoutPercentage: 0,
    cutoutPercentage: 50,
    legend: {position:'left',
        labels:{
        pointStyle:'circle',
        usePointStyle:true
        }
    }
    };
    if (chartPie) {
    new Chart(chartPie, {
    type: 'pie',
    data: chartPie_Data,
    options: chartPie_options
    });
    }
</script>

<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>

{{-- DataTable --}}
<script>
    $(document).ready(function () {
        var simple = $('#repair_table').DataTable({
        "iDisplayLength": 5,
        });
        } );

        $(document).ready(function() {
        var simple = $('#onsite_table').DataTable({
            "iDisplayLength": 5,
        });
        } );
</script>



@endsection