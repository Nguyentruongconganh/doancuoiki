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
						<form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
							<div class="key form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<input id="email" type="text" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
								<div class="clearfix"></div>
							</div>
							<div class="key form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<i class="fa fa-lock" aria-hidden="true"></i>
								<input id="password" type="password"  name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
								<div class="clearfix"></div>
							</div>
							<input type="submit" value="Login">
						</form>
					</div>
					<div class="forg">
						<a href="{{ route('password.request') }}" class="forg-left">Forgot Password</a>
						<a href="{{ route('register') }}" class="forg-right">Register</a>
					<div class="clearfix"></div>
					</div>
				</div>
			</div>
				<!--login-->
</div>
@endsection
