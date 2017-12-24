<div class="footer-w3l">
						<div class="container">
							<div class="footer-grids">
								<div class="col-md-3 footer-grid">
									<h4>About </h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
									<div class="social-icon">
										<a href="#"><i class="icon"></i></a>
										<a href="#"><i class="icon1"></i></a>
										<a href="#"><i class="icon2"></i></a>
										<a href="#"><i class="icon3"></i></a>
									</div>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>My Account</h4>
									<ul>
										@if (Auth::guest())
											<li><a href="{{ route('login') }}">Dang Nhap</a></li>
											<li><a href="{{ route('register') }}">Dang Ky</a></li>
										@else
									
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
													{{ Auth::user()->name }}
												</a>
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
											<li><a href="admin/danhsach/sanpham">PhanQuyen</a></li>
										@endif
									</ul>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>Information</h4>
									<ul>
										<li><a href="{{route('trang-chu')}}">Trang Chủ</a></li>
										<li><a href="{{route('loai-san-pham',1)}}">Loại Sản Phẩm</a></li>
								
									</ul>
								</div>
								<div class="col-md-3 footer-grid foot">
									<h4>Contacts</h4>
									<ul>
										<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="#">E Comertown Rd, Westby, USA</a></li>
										<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="#">1 599-033-5036</a></li>
										<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:example@mail.com"> example@mail.com</a></li>
										
									</ul>
								</div>
							<div class="clearfix"> </div>
							</div>
							
						</div>
</div>

<div class="copy-section">
						<div class="container">
							<div class="copy-left">
								<p>&copy; 2016 New Shop . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
							</div>
							<div class="copy-right">
								<img src="sourch/images/card.png" alt=""/>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				<!--copy-->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">