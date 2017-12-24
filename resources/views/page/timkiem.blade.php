@extends('master')
@section('content')
<div class="content">
			<!--banner-bottom-->
				
			<!--banner-bottom-->
			<!--new-arrivals-->
			
			<!--new-arrivals-->
			<div class="new-arrivals-w3agile">
					<div class="container">
						<h3 class="tittle1">Kết Qủa Tìm Kiếm</h3>
						<div class="arrivals-grids">
							@foreach($product as $new)
							<div class="col-md-3 arrival-grid simpleCart_shelfItem"> 
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="{{route('chi-tiet-san-pham',$new->id)}}">
												<div class="grid-img">
													<img  src="sourch/image/product/{{$new->image}}"  class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="sourch/image/product/{{$new->image}}" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									@if($new->new == 1)
									<div class="ribben">
										<p>NEW</p>
									</div>
									@endif
									@if($new->promotion == 1)
									<div class="ribben1">
										<p>SALE</p>
									</div>
									@endif
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="{{route('chi-tiet-san-pham',$new->id)}}">{{$new->name}}</a></h6>
										<p >
											@if($new->promotion == 0)
																
												<em class="item_price">{{$new->unit_price}}</em>
											@else
												<del>{{$new->unit_price}}</del>
												<em class="item_price">{{$new->promotion_price}}</em>
											@endif

										</p>
										<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
									</div>
								</div>
							</div>
							@endforeach
							<div class="clearfix"></div>
						</div>
						<div class="arrivals-grids">{{$product->links()}}</div>
					</div>
				</div>
				
			<!--accessories-->
			<!--Products-->
	
			<!--new-arrivals-->
</div>
@endsection