@extends('master')
@section('content')
<div class="content">
    <div class="cart-items">
        <div class="container">
                <h2>My Shopping Bag
                    @if(Session::has('cart'))
                        ({{Session('cart')->totalQty}})
                    @else
                        (Empty)
                    @endif
                </h2>
                @if(Session::has('cart'))
                    @foreach(Session('cart')->items as $item)
                    <div class="cart-header">
                        <a href="{{route('giam-dan-gio-hang',$item['item']->id)}}"><div class="close3"> </div></a>
                        <div class="cart-sec simpleCart_shelfItem">
                            <div class="cart-item cyc">
                                    <img src="sourch/image/product/{{$item['item']->image}}" class="img-responsive" alt="">
                            </div>
                            <div class="cart-item-info">
                            <h3><a href="{{route('chi-tiet-san-pham',$item['item']->id)}}">{{$item['item']->name}}</a></h3>
                            <ul class="qty">
                                <li><p>Quantity: {{$item['qty']}}</p></li>
                                <li><p>FREE delivery</p></li>
                            </ul>
                                    <div class="delivery">
                                    <p>Price: {{$item['item']->promotion_price == 0 ?$item['item']->unit_price:$item['item']->promotion_price}}</p>
                                    <div class="clearfix"></div>
                            </div>	
                            </div>
                            <div class="clearfix"></div>
                                                
                        </div>
                    </div>
                    @endforeach
                    <h3>Total: {{Session('cart')->totalPrice}}</h3>
                @endif
        </div>
</div>
@endsection