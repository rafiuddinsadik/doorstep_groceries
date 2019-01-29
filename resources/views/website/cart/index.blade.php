@extends('layouts.landing.landing')

@push('styles')
    <link href="{{asset('css/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('css/cart.css')}}" rel="stylesheet">
@endpush

@section('main-content')

    <div id="wrapper">

        <!-- Sidebar -->
    @include('layouts.components.sidebar')

        <!-- My Cart -->
    @include('website.cart.components.mycart')



@endsection


@push('scripts')
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    <script>
        // Remove Items From Cart
        $('a.remove').click(function(){
            event.preventDefault();
            $( this ).parent().parent().parent().hide( 400 );

        })

        // Just for testing, show all items
        $('a.btn.continue').click(function(){
            $('li.items').show(400);
        })
    </script>
@endpush