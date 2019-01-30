<div class="container" style="padding-top: 50px; padding-bottom: 10px">
    @if(session()->has('success_message'))
        <div class="alert alert-success" role="alert">
            {{session()->get('success_message')}}
        </div>
    @endif
    <div class="heading cf">
        <h1>My Cart</h1>
        <a href="{{route('website.landing.index')}}" class="continue">Continue Shopping</a>
    </div>
    <div class="cart">
        @if(Cart::count() > 0)
        <h3>{{Cart::count()}} Item(s) Added</h3>
        <ul class="cartWrap">
            <li class="items">

                <div class="infoWrap">
                    <div class="cartSection">
                        <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg" />
                        <p class="itemNumber">#QUE-007544-002</p><br>
                        <h3>Item Name 1</h3>
                        <br>
                        <p> 3 x $5.00</p><p class="stockStatus"> In Stock</p><br>
                        <br>
                        <p>Unit Size : 500gm</p>
                    </div>


                    <div class="prodTotal cartSection">
                        <p>$15.00</p>
                    </div>
                    <div class="cartSection removeWrap">
                        <a href="#" class="remove">x</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="promoCode"><label for="promo">Have A Promo Code?</label><input type="text" name="promo" placholder="Enter Code" />
        <a href="#" class="btn"></a></div>

    <div class="subtotal cf">
        <ul>
            <li class="totalRow"><span class="label">Subtotal</span><span class="value" style="background-color: white">$35.00</span></li>

            <li class="totalRow"><span class="label">Shipping</span><span class="value" style="background-color: white">$5.00</span></li>

            <li class="totalRow"><span class="label">Tax</span><span class="value" style="background-color: white">$4.00</span></li>
            <li class="totalRow final"><span class="label">Total</span><span class="value" style="background-color: white">$44.00</span></li>
            <li class="totalRow"><a href="#" class="btn continue">Checkout</a></li>
        </ul>
    </div>
    @else
        <div class="alert alert-danger" role="alert">
            No Items in your cart now
        </div>
    @endif
</div>