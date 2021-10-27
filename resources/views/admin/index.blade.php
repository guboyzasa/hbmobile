@extends('layouts.master')

@section('title') @lang('translation.Dashboards') @endsection

@section('content')

<h3>Welcome to admin !</h3>

@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- dashboard init -->
    <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endsection
