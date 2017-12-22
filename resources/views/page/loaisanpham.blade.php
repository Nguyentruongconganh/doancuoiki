@extends('master')
@section('content')
<div class="banner1">
	<div class="container">
		<h3><a href="{{route('trang-chu')}}">Home</a> / <span>Products</span></h3>
	</div>
</div>
<!--banner-->
<!--content-->
<div class="content">
	<div class="products-agileinfo">
			<h2 class="tittle">Sản Phẩm {{$loai_sp->name}}</h2>
		<div class="container">
			<div class="product-agileinfo-grids w3l">
				<div class="col-md-3 product-agileinfo-grid">
					<div class="categories">
						<h3>Lựa Chọn</h3>
						<ul class="tree-list-pad">
							<li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><span></span>Loại Sản Phẩm</label>
								<ul>
								@foreach($loai as $l)
									<li><input type="checkbox" id="item-0-0" /><a href="{{route('loai-san-pham',$l->id)}}">{{$l->name}}</a>
									</li>
								@endforeach
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-9 product-agileinfon-grid1 w3l">
					
				
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav1 nav1-tabs left-tab" role="tablist">
							<ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><img src="images/menu1.png"></a></li>
						<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile"><img src="images/menu.png"></a></li>
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							
								<div class="product-tab">
								@foreach($sp_theoloai as $sp)
									<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
										<div class="grid-arr">
											<div  class="grid-arrival">
												<figure>		
													<a href="{{route('chi-tiet-san-pham',$sp->id)}}" class="new-gri" >
														<div class="grid-img">
															<img  src="sourch/image/product/{{$sp->image}}" class="img-responsive" alt="">
														</div>
														<div class="grid-img">
															<img  src="sourch/image/product/{{$sp->image}}" class="img-responsive"  alt="">
														</div>			
													</a>		
												</figure>	
											</div>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="women">
												<h6><a href="{{route('chi-tiet-san-pham',$sp->id)}}">{{$sp->name}}</a></h6>
												<p >
													@if($sp->promotion == 0)
													
														<em class="item_price">{{$sp->unit_price}}</em>
													@else
														<del>{{$sp->unit_price}}</del>
														<em class="item_price">{{$sp->promotion_price}}</em>
													@endif

												</p>
												<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
											</div>
										</div>
									</div>
								@endforeach
									<div class="clearfix"></div>
								</div>
								<div class="product-tab">{{$sp_theoloai->links()}}</div>

							
							</div>
							<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
						
								<div class="product-tab1">
								@foreach($sp_theoloai as $sp)
									<div class="col-md-4 product-tab1-grid">
										<div class="grid-arr">
											<div  class="grid-arrival">
												<figure>		
													<a href="{{route('chi-tiet-san-pham',$sp->id)}}" class="new-gri" >
														<div class="grid-img">
															<img  src="sourch/image/product/{{$sp->image}}" class="img-responsive" alt="">
														</div>
														<div class="grid-img">
															<img  src="sourch/image/product/{{$sp->image}}" class="img-responsive"  alt="">
														</div>			
													</a>		
												</figure>	
											</div>
										</div>
									</div>
									<div class="col-md-8 product-tab1-grid1 simpleCart_shelfItem">
										<div class="block">
											<div class="starbox small ghosting"> </div>
										</div>
										<div class="women">
											<h6><a href="{{route('chi-tiet-san-pham',$sp->id)}}">{{$sp->name}}</a></h6>
											
											<p>{{$sp->description}} </p>
											<p >
													@if($sp->promotion == 0)
													
														<em class="item_price">{{$sp->unit_price}}</em>
													@else
														<del>{{$sp->unit_price}}</del>
														<em class="item_price">{{$sp->promotion_price}}</em>
													@endif
											</p>
											<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
										</div>
									</div>
								@endforeach
									<div class="clearfix"></div>
								</div>	
								<div class="product-tab1">{{$sp_theoloai->links()}}</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
@endsection