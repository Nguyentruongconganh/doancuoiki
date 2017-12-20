@extends('master')
@section('content')
<div class="banner-w3">
			<div class="demo-1">            
				<div id="example1" class="core-slider core-slider__carousel example_1">
					<div class="core-slider_viewport">
						<div class="core-slider_list">
							@foreach($slide as $sl)
							<div class="core-slider_item">
								<img src="sourch/image/slide/{{$sl->image}}" class="img-responsive"  alt="">
							</div>
							 @endforeach
						 </div>
					</div>
					<div class="core-slider_nav">
						<div class="core-slider_arrow core-slider_arrow__right"></div>
						<div class="core-slider_arrow core-slider_arrow__left"></div>
					</div>
					<div class="core-slider_control-nav"></div>
				</div>
			</div>
			<link href="sourch/css/coreSlider.css" rel="stylesheet" type="text/css">
			<script src="sourch/js/coreSlider.js"></script>
			<script>
			$('#example1').coreSlider({
			  pauseOnHover: false,
			  interval: 3000,
			  controlNavEnabled: true
			});

			</script>

</div>
<div class="content">
			<!--banner-bottom-->
				
			<!--banner-bottom-->
			<!--new-arrivals-->
			
			<!--new-arrivals-->
			<div class="new-arrivals-w3agile">
					<div class="container">
						<h3 class="tittle1">Sản Phẩm Mới</h3>
						<div class="arrivals-grids">
							@foreach($new_product as $new)
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
						<div class="arrivals-grids">{{$new_product->links()}}</div>
					</div>
				</div>
				
			<!--accessories-->
			<!--Products-->
				<div class="product-agile">
					<div class="container">
						<h3 class="tittle1"> Sản Phẩm Nổi Bật</h3>
						<div class="slider">
							<div class="callbacks_container">
								<ul class="rslides" id="slider">
									<li>	 
										<div class="caption">
											@foreach($hightlight as $nb)
											<div class="col-md-3 cap-left simpleCart_shelfItem">
												<div class="grid-arr">
													<div  class="grid-arrival">
														<figure>		
															<a href="{{route('chi-tiet-san-pham',$nb->id)}}">
																<div class="grid-img ">
																	<img  src="sourch/image/product/{{$nb ->image}}" class="img-responsive" alt="">
																</div>
																		
															</a>		
														</figure>	
													</div>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<div class="women">
														<h6><a href="{{route('chi-tiet-san-pham',$nb->id)}}">{{$nb->name}}</a></h6>
														<p >
															@if($nb->promotion == 0)
															
															<em class="item_price">{{$nb->unit_price}}</em>
															@else
															<del>{{$nb->unit_price}}</del>
															<em class="item_price">{{$nb->promotion_price}}</em>
															@endif

														</p>
														
														<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
													</div>
												</div>
											</div>
											@endforeach
											<div class="clearfix"></div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="slider">{{$hightlight->links()}}</div>
					</div>
				</div>
			<!--Products-->

				<div class="new-arrivals-w3agile">
					<div class="container">
						<h3 class="tittle1">Sản Phẩm Khuyến Mãi</h3>
						<div class="arrivals-grids">
							@foreach($promotion as $km)
							<div class="col-md-3 arrival-grid simpleCart_shelfItem"> 
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="{{route('chi-tiet-san-pham',$km->id)}}">
												<div class="grid-img">
													<img  src="sourch/image/product/{{$km->image}}" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="sourch/image/product/{{$km->image}}" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									@if($km->new == 1)
									<div class="ribben">
										<p>NEW</p>
									</div>
									@endif
									@if($km->promotion == 1)
									<div class="ribben1">
										<p>SALE</p>
									</div>
									@endif
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="{{route('chi-tiet-san-pham',$km->id)}}">{{$km->name}}</a></h6>
										<p >
											@if($nb->promotion == 0)
																
												<em class="item_price">{{$nb->unit_price}}</em>
											@else
												<del>{{$nb->unit_price}}</del>
												<em class="item_price">{{$nb->promotion_price}}</em>
											@endif

										</p>
										<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
									</div>
								</div>
							</div>
							@endforeach
							<div class="clearfix"></div>
						</div>
						<div class="arrivals-grids">{{$promotion->links()}}</div>
					</div>
				</div>
			<!--new-arrivals-->
</div>
@endsection