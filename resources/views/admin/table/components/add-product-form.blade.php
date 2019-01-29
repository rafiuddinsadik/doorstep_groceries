<form action="{{route('admin.dashboard.store')}}" enctype="multipart/form-data" method="POST">
    {{csrf_field()}}
    <div class="form-group">
        <label for="exampleInputEmail1">Product Name</label>
        <input type="text" class="form-control" placeholder="Enter Name" name="name">
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
        <input type="text" class="form-control" placeholder="Price" name="price">
    </div>
    <hr>
    <div class="form-group">
        <label for="exampleInputEmail1">Discounted Price</label>
        <input type="text" class="form-control" placeholder="Price" name="discounted_price">
        <small style="color: red">Optional</small>
    </div>
    <hr>
    <div class="form-group">
        <label for="exampleInputEmail1">Quantity</label>
        <input type="text" class="form-control" placeholder="Quantity" name="quantity">
    </div>
    <hr>
    <div class="form-group">
        <label for="exampleInputEmail1">Unit Weight</label>
        <input type="text" class="form-control" placeholder="Weight" name="weight">
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
        <textarea class="form-control" name="description" rows="3"></textarea>
    </div>
    <hr>
    <div class="form-group">
        <label>Picture</label>
        <input type="file" class="form-control-file" name="image">
    </div>
    <hr>
    <button type="submit" class="btn btn-outline-primary btn-block">Add</button>
</form>