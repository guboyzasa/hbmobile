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
                                <canvas id="chartPieRepair"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">สถานะสมาชิก</h4>
                                <canvas id="chartPieCustomer"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Ecommerce</h4>
                                <canvas id="chartPieEcommerce"></canvas>
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
                                            <th>#</th>
                                            <th>รายการซ่อม</th>
                                            <th>ราคา</th>
                                        </tr>
                                    </thead>
                                    <tbody>

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
                                            <th>#</th>
                                            <th>รายการติดตั้ง</th>
                                            <th>ราคา</th>
                                        </tr>
                                    </thead>
                                    <tbody>

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
    labels: ['สินค้า','หมวดหมู่','แบรนด์','ลูกค้าทั้งหมด', 'ออเดอร์', 'ประกันสินค้า', 'งานซ่อม', 'งานติดตั้ง'],
    datasets: [{
        //label: 'Report Chart',
        data: [{{$countProduct}}, {{$countProductCat}}, {{$countProductBrand}}, {{$countCustomer}}, {{$countOrder}}, {{$countRegisterWarranty}}, {{$countRepair}}, {{$countOnsite}}],
        backgroundColor: [ '#f44336','#f1c232','#3d85c6','#8fce00','#674ea7','#f13391','#fff2cc','#665151']
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
        backgroundColor: [ '#f44336','#8fce00','#f1c232']
    }]
    }
    // Pie Chart
    var chartPie = document.getElementById('chartPieRepair').getContext('2d');
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

{{-- Pie Customer --}}
<script>
    // Pie Data
    var chartPie_Data = {
    labels: ['ลูกค้าที่เข้าระบบแล้ว', 'ลูกค้าที่ยังไม่เข้าระบบ'],
    datasets: [{
        //label: 'Report Chart',
        data: [{{$countUserCustomer}}, {{$countUserCus}}],
        backgroundColor: ['#8fce00','#16537e']
    }]
    }
    // Pie Chart
    var chartPie = document.getElementById('chartPieCustomer').getContext('2d');
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

{{-- Pie Ecommerce --}}
<script>
    // Pie Data
    var chartPie_Data = {
    labels: ['สินค้าทั้งหมด', 'สินค้าใหม่','สินค้าแนะนำ','สินค้าที่มีในสต๊อก','สินค้าที่ไม่มีในสต๊อก'],
    datasets: [{
        //label: 'Report Chart',
        data: [{{$countProduct}}, {{$countProductNew}}, {{$countProductRecom}}, {{$countProductStock}}, {{$countProductStocks}}],
        backgroundColor: [ '#f44336','#3d85c6','#8fce00','#f1c232','#16537e']
    }]
    }
    // Pie Chart
    var chartPie = document.getElementById('chartPieEcommerce').getContext('2d');
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
        var repair = '';
        var onsite = '';
        } );

        $('#onsite_table').ready(function() {

            onsite = $('#onsite_table').DataTable({
                "iDisplayLength": 5,
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
                    "url": `{{ route('admin.onsite.show') }}`,
                    "method": "POST",
                    "data": {
                        "_token": "{{ csrf_token() }}",
                    },
                },
                'columnDefs': [{
                    "targets": [0, 1, 2],
                }, ],
                "columns": [
                    {
                        "data": "onsite_start_date",
                        "render": function(data, type, full) {
                            return moment(data).format('DD-MM-YY');
                        }
                    },
                    
                    {
                        "data": "model",
                        "render": function(data, type, full) {
                            return full.model + " x " + full.detail;
                        }
                    },

                    {
                        "data": "price",
                    },
                ],
            });
        });

        $('#repair_table').ready(function() {

            repair = $('#repair_table').DataTable({
                "iDisplayLength": 5,
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
                    "url": `{{ route('admin.repair.show') }}`,
                    "method": "POST",
                    "data": {
                        "_token": "{{ csrf_token() }}",
                    },
                },
                'columnDefs': [{
                    "targets": [0, 1, 2],
                }, ],
                "columns": [
                    {
                        "data": "repair_start_date",
                        "render": function(data, type, full) {
                            return moment(data).format('DD-MM-YY');
                        }
                    },

                    {
                        "data": "model",
                        "render": function(data, type, full) {
                            return full.model + " x " + full.detail;
                        }
                    },

                    {
                        "data": "price",
                        "render": function(data, type, full) {
                            return full.price + full.shipping_price;
                        }
                    },
                ],
            });
        });
</script>
@endsection