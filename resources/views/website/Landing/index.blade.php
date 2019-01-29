@extends('layouts.landing.landing')

@push('styles')
    <link href="{{asset('css/sidebar.css')}}" rel="stylesheet">
@endpush

@section('main-content')

    <div id="wrapper">

    <!-- Sidebar -->
    @include('layouts.components.sidebar')

    <!-- header -->
    @include('website.Landing.components.header')

    <!-- banner -->
    @include('website.Landing.components.banner')

    <!-- Hot products -->
    @include('website.Landing.components.hot-products')

    <!-- top brands -->
    @include('website.Landing.components.top-brands')

    <!-- newsletter -->
    @include('website.Landing.components.newsletter')


    </div>

@endsection


@push('scripts')
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
@endpush