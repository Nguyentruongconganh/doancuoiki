@extends('master')
@section('content')
<div class="banner1">
			<div class="container">
				<h3><a href="{{route('trang-chu')}}">Home</a> / <span>Mail Us</span></h3>
			</div>
</div>
	<!--banner-->
		<!--content-->
		<div class="content">
				<!--login-->
			<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Đăng Ký</h3>
					@if(count($errors) > 0)
						<div class="alert alert-danger">
							@foreach($errors ->all() as $err)
								{{$err}}<br>
							@endforeach
						</div>
					@endif

					@if(session('thongbao'))
						<div class="alert alert-success">
							{{session('thongbao')}}
						</div>
					@endif
					<form action="{{route('dang-ky')}}" method="post">
					<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" value="Email" name="email" required>
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Username" name="fullname"  required>
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" value="Address" name="address"  required>
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" value="phone" name="phone"  required>
							<div class="clearfix"></div>
						</div>
						
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Password" name="password"  required>
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Re Password" name="re_password" required>
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Submit">
					</form>
				</div>
				
			</div>
		</div>
				<!--login-->
</div>
@endsection