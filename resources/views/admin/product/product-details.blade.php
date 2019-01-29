@extends('layouts.admin.admin')

@section('main-content')

    <div class="m-3">
        <div><button class="btn btn-outline-success float-right">Edit</button>
            <button class="btn btn-outline-danger float-right">Delete</button>
            <br><br>
        </div>
        <div class="row">

            <div class="col-4">

                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('pics/shopping-cart.jpg')}}" alt="Product Image">
                    <div class="card-body">
                        <h4 class="card-text">Product Image</h4>
                    </div>
                </div>

            </div>


            <div class="col-8">
                <h1>{{$product->name}}</h1>
                <br><br>
                <h4>Brand: <span class="badge badge-pill badge-primary">{{$product->getBrand->name}}</span></h4>
                <h4>Category: <span class="badge badge-pill badge-success">{{$product->getCategory->name}}</span></h4>
                <h4>Sub-Category: <span class="badge badge-pill badge-dark">{{$product->getSubCategory->name}}</span></h4>
                <br>
                @php
                 if($product->discounted_price != 0){
                    echo "<h4>Price: ৳<span style='padding-right: 15px; color: red; padding-left: 15px'><del>$product->price</del></span><span style='color: green'>$product->discounted_price</span></h4>";
                 }else{
                     echo "<h4>Price: <span>৳ $product->price</span></h4>";
                 }
                @endphp
                <br>
                <h4><b>Description:</b></h4>
                <p>{{$product->description}}</p>
            </div>
        </div>
    </div>

@endsection
