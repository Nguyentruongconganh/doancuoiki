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
										<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="https://www.google.com/maps/place/86+Tr%E1%BA%A7n+H%C6%B0ng+%C4%90%E1%BA%A1o,+Ph%E1%BA%A1m+Ng%C5%A9+L%C3%A3o,+Qu%E1%BA%ADn+1,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7669982,106.6986684,13.18z/data=!4m5!3m4!1s0x31752f167372a5db:0xcedad4a6126f8f6c!8m2!3d10.766243!4d106.693523">286/2a Trần Hưng Đạo,Nguyễn Cư Trinh,Quận 1,Hồ Chí Minh</a></li>
										<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="#">0167 640 1524</a></li>
										<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:example@mail.com"> nguyentruongconganh1997@mail.com</a></li>
										
									</ul>
								</div>
							<div class="clearfix"> </div>
							</div>
							
						</div>
</div>


				<!--copy-->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">