@extends('layouts.admin.admin')

@section('main-content')

    @if (session('update'))
        <div class="alert alert-success">
            {{ session('update') }}
        </div>
    @elseif (session('add'))
        <div class="alert alert-success">
            {{ session('add') }}
        </div>
    @elseif (session('delete'))
        <div class="alert alert-danger">
            {{ session('delete') }}
        </div>
    @endif

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
                            <h5 class="modal-title" id="exampleModalCenterTitle">Add a new Brand</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="">
                                <input type="text">
                                <input type="text">
                                <button>Submit</button>
                            </form>

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
            </tr>
            </thead>
            <tbody>
            @if(!empty($products) && count($products))
                @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$product->name}}</td>
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