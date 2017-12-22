<div class="header">
	<div class="header-top">
		<div class="container">
				<div class="top-left">
				<a href="#"> Help  <i class="glyphicon glyphicon-phone" aria-hidden="true"></i> +0123-456-789</a>
			</div>
	
			<ul class="nav navbar-top-links navbar-right">
				<!-- /.dropdown -->
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-user">
						<!-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                		</li>
                		<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                		</li>
                		<li class="divider"></li>
                		<li><a href=""><i class="fa fa-sign-out fa-fw"></i> Logout</a>
						</li> -->
						@if (Auth::guest())
							<li><a href="{{ route('login') }}">Dang Nhap</a></li>
							<li><a href="{{ route('register') }}">Dang Ky</a></li>
						@else
						
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
									{{ Auth::user()->name }}
								</a>
							</li>
							<li><a href="admin/sanpham/danhsach"> Admin</a>
                			</li>
							<li>
								<a href="{{ route('logout') }}"
									onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
									Dang Xuat
								
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
				

						@endif
					</ul>
					<!-- /.dropdown-user -->
				</li>
		<!-- /.dropdown -->
			</ul>
			
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="heder-bottom">
		<div class="container">
			<div class="logo-nav">
				<div class="logo-nav-left">
					<h1><a href="{{route('trang-chu')}}">MOBIE <span>WORD</span></a></h1>
				</div>
				<div class="logo-nav-left1">
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="active"><a href="{{route('trang-chu')}}" class="act">Trang Chủ</a></li>	
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Loại Sản Phẩm<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="col-sm-3  multi-gd-img">
											<ul class="multi-column-dropdown">
												<h6>Submenu1</h6>
												@foreach($loai_sp as $sp)
												<li><a href="{{route('loai-san-pham',$sp->id)}}">{{$sp->name}}</a></li>
												@endforeach
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							
							<li><a href="codes.html">Chưa biết</a></li>
							<li><a href="mail.html">Liên Hệ</a></li>
						</ul>
					</div>
					</nav>
				</div>
				<div class="logo-nav-right">
					<ul class="cd-header-buttons">
						<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
					</ul> <!-- cd-header-buttons -->
					<div id="cd-search" class="cd-search">
						<form action="#" method="post">
							<input name="Search" type="search" placeholder="Search...">
						</form>
					</div>	
				</div>
				<div class="header-right2">
					<div class="cart box_1">
						<a href="{{route('check-out')}}">
							<h3>
								<div class="total">
								@if(Session::has('cart'))
									<span>${{Session::get('cart')->totalPrice}}</span> (<span>{{Session::get('cart')->totalQty}}</span> items)
								@else
									<span class="simpleCart_total">$0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)
								@endif
								</div>
								<img src="sourch/images/bag.png" alt="" />
							</h3>
						</a>
						<p><a href="{{route('empty-cart')}}" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					</div>

					<div class="a"> x</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>