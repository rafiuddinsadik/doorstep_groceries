<div class="top-brands">
    <div class="container">
        <h3>Hot Offers</h3>
        <div class="agile_top_brands_grids">
            @if(!empty($products) && count($products))
                @foreach($products as $product)

                    <div class="col-md-3 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block" >
                                            <div class="snipcart-thumb">
                                                <a href="#"><img title=" " alt=" " src="{{asset('pics/shopping-cart.jpg')}}" /></a>
                                                <p>{{$product->name}}(5 Kg)</p>
                                                <h4>৳{{$product->price}} <span>৳15.00</span></h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                <form action="{{route('cart.store')}}" method="POST">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="id" value="{{$product->id}}" />
                                                        <input type="hidden" name="name" value="{{$product->name}}" />
                                                        <input type="hidden" name="price" value="{{$product->price}}" />
                                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                                </form>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            @endif
            <div class="clearfix"> </div>
        </div>
    </div>
</div>