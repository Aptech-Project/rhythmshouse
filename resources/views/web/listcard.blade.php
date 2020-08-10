<div class="cart-table" >
    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th class="p-name">Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartAll as $c)
                <tr>
                    <td class="cart-pic first-row"><img style="width: 170px;height:170px" src="{{ url('images/'.$c->image ) }} " alt=""></td>
                    <td class="cart-title first-row">
                        <h5>{{ $c -> name }}</h5>
                    </td>
                    <td class="p-price first-row">{{ $c -> price }}</td>
                    <td class="qua-col first-row">
                        <div class="quantity">
                            <div class="pro-qty">
                                <input id = "{{$c->id}}" type="text" value="{{$c->quanity}}">
                            </div>
                        </div>
                    </td>
                    <td class="p-price first-row">${{ $c -> price * $c->quanity}}</td>
                    {{-- <td class="close-td first-row"><a href="{{ url('web/cart/delete/'.$c->id) }}" class="ti-close"></a></td> --}}
                    <td class="close-td first-row"><i onclick="deleteCartItem( {{ $c->id }} )" class="ti-close"></i></td>
                </tr>
            
            @endforeach
        </tbody>
    </table>
</div>
<div class="row">
    <div class="col-lg-4 offset-lg-8">
        <div class="proceed-checkout">
            @foreach($totalPrice as $p)
            <ul>
            <li class="cart-total">Total <span> ${{ $p }}</span></li>
            </ul>
            @endforeach
            <a href="{{ url('web/order') }}" class="proceed-btn">PROCEED TO CHECK OUT</a>
        </div>
    </div>
</div>