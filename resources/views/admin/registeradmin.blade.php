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
							<h3>Register</h3>
							<form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
								<div class="key form-group{{ $errors->has('name') ? ' has-error' : '' }}">
									<i class="fa fa-user" aria-hidden="true"></i>
									<input  input id="name" type="text"  name="name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                     @endif
									<div class="clearfix"></div>
								</div>
								<div class="key form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<i class="fa fa-envelope" aria-hidden="true"></i>
									<input id="email" type="text"  name="email" value="{{ old('email') }}" required>
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
								<div class="key form-group">
									<i class="fa fa-lock" aria-hidden="true"></i>
									<input id="password-confirm" type="password"  name="password_confirmation" required>
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
