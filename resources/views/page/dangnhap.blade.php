@extends('master')
@section('content')
<div class="banner1">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>Mail Us</span></h3>
			</div>
</div>
	<!--banner-->
		<!--content-->
<div class="content">
				<!--login-->
			<div class="login">
				<div class="main-agileits">
					<div class="form-w3agile">
						<h3>Login To New Shop</h3>
						@if(Session::has('flag'))
						<div class="alert alert-{{Session::get('flag')}}">
							{{Session::get('message')}}
						</div>
						@endif
						<form action="{{route('dang-nhap')}}" method="post">
						<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
							<div class="key">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<input  type="text" value="Email" name="email"  required>
								<div class="clearfix"></div>
							</div>
							<div class="key">
								<i class="fa fa-lock" aria-hidden="true"></i>
								<input  type="password" value="Password" name="password"  required>
								<div class="clearfix"></div>
							</div>
							<input type="submit" value="Login">
						</form>
					</div>
					<div class="forg">
						<a href="#" class="forg-left">Forgot Password</a>
						<a href="registered.html" class="forg-right">Register</a>
					<div class="clearfix"></div>
					</div>
				</div>
			</div>
				<!--login-->
</div>
@endsection