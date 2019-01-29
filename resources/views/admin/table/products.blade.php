@extends('layouts.admin.admin')

@section('main-content')

    <div class="card">
        <div class="card-header">
            <h2 class="float-left">All Products</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-success float-right" data-toggle="modal" data-target="#exampleModalCenter">
                Add +
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Add a Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            @include('admin.table.components.add-product-form')

                        </div>
                    </div>
                </div>
            </div>
        </div>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Category</th>
                    <th scope="col">Sub-Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Details</th>
                </tr>
                </thead>
                <tbody>
                @if(!empty($products) && count($products))
                    @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->getBrand->name}}</td>
                        <td>{{$product->getCategory->name}}</td>
                        <td>{{$product->getSubCategory->name}}</td>
                        <td>BDT-{{$product->price}}</td>
                        <td><a href="{{route('admin.dashboard.products.details', $product->id)}}" class="btn btn-sm btn-outline-info">Show Details</a></td>
                    </tr>
                    @endforeach
                @else
                    <div class="alert alert-danger text-center" role="alert">
                        No products found!
                    </div>
                @endif
                </tbody>
            </table>
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