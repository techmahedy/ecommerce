@includeIf('frontend.layout.header')

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
<table>
    <thead>
        <tr>
            <th class="shoping__product">Products</th>
            <th>Price</th>
            <th>Size</th>
            <th>Quantity</th>
            <th>Total</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach(Cart::content() as $row)
        <tr>
            <td class="shoping__cart__item">
                <img src="img/cart/cart-1.jpg" alt="">
                <h5>Vegetable’s Package</h5>
            </td>
            <td class="shoping__cart__price">
                ${{$row->price}}
            </td>
            <td>{{$row->options->has('size') ? $row->options->size : 'default'}}</td>
            <td class="shoping__cart__quantity">
                <div class="quantity">
                    <div class="pro-qty">
                        <input type="text" value="{{$row->qty}}">
                    </div>
                </div>
            </td>
            <td class="shoping__cart__total">
                ${{$row->total}}
            </td>
            <td class="shoping__cart__item__close">
            <form action="{{route('cart.delete',$row->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="rowId" value="{{$row->rowId}}">
                    <button type="submit" class="icon_close"></button>
            </form>
            </td>
        </tr>
       @endforeach
    </tbody>
</table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span>${{Cart::subtotal()}}</span></li>
                            <li>Tax <span>${{Cart::tax()}}</span></li>
                            <li>Total <span>${{Cart::total()}}</span></li>
                        </ul>
                        <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
@includeIf('frontend.layout.footer')