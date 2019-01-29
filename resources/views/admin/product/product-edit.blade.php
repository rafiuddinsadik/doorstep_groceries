@extends('layouts.admin.admin')

@section('main-content')

    <div class="container">

        <form action="{{route('admin.dashboard.products.update', $product->id)}}" enctype="multipart/form-data" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" class="form-control" value="{{$product->name}}" name="name">
            </div>
            <hr>
            <div class="form-group">
                <label>Brand</label>
                <select class="form-control" name="brand_id">
                    @foreach($brands as $brand)
                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                    @endforeach
                </select>
            </div>
            <hr>
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category_id" id="category">
                    <option value="">Select a Category</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <hr>
            <div class="form-group">
                <label>Sub-Category</label>
                <select class="form-control" name="sub_category_id" id="sub_category">
                    <option value="">Select Category First</option>
                </select>
            </div>

            <hr>
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="text" class="form-control" value="{{$product->price}}" name="price">
            </div>
            <hr>
            <div class="form-group">
                <label for="exampleInputEmail1">Discounted Price</label>
                <input type="text" class="form-control" value="{{$product->discounted_price}}" name="discounted_price">
                <small style="color: red">Optional</small>
            </div>
            <hr>
            <div class="form-group">
                <label for="exampleInputEmail1">Quantity</label>
                <input type="text" class="form-control" value="{{$product->total_quantity}}" name="quantity">
            </div>
            <hr>
            <div class="form-group">
                <label for="exampleInputEmail1">Unit Weight</label>
                <input type="text" class="form-control" value="{{$product->weight}}" name="weight">
            </div>
            <hr>
            <div class="form-group">
                <label>Weight Type</label>
                <select class="form-control"  name="weight_id">
                    @foreach($weight_types as $weight_type)
                        <option value="{{$weight_type->id}}">{{$weight_type->name}}</option>
                    @endforeach
                </select>
            </div>
            <hr>
            <div class="form-group">
                <label>Product Description</label>
                <input class="form-control" value="{{$product->description}}" name="description">
            </div>
            <hr>
            <div class="form-group">
                <label>Change Picture</label>
                <input type="file" class="form-control-file" value="{{$product->image}}" name="image">
            </div>
            <hr>
            <button type="submit" class="btn btn-outline-info btn-block">Update</button>
        </form>

    </div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#category').on('change', function (e) {
                console.log(e);
                var cat_id = e.target.value;
                var prev = document.getElementById("sub_category");
                while(prev.hasChildNodes()){
                    prev.removeChild(prev.firstChild);
                }
                //for ajax
                $.get('/ajax-subcat?cat_id=' + cat_id, function (data) {
                    $.each(data, function (index, subcatObj) {
                        $('#sub_category').append('<option value="'+subcatObj.id+'">'+subcatObj.name+'</option>');
                    })
                });
            });
        });
    </script>
@endpush