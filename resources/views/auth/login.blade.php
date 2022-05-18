<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Prabhu Travel Admin Panel Login</title>
	<link href="{{ asset("bk/assets/css/bootstrap.min.css") }}" rel="stylesheet">
	<link href="{{ asset("bk/assets/css/font-awesome.min.css") }}" rel="stylesheet">
	<link href="{{ asset("bk/assets/css/datepicker3.css") }}" rel="stylesheet">
	<link href="{{ asset("bk/assets/css/styles.css") }}" rel="stylesheet">
    <link href="{{ asset("bk/assets/css/custom.css") }}" rel="stylesheet">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading text-center">Login</div>
				<div class="panel-body">
					<div class="form-group logo-div">
						<img src="{{ asset("bk/assets/img/logo.png") }}" class="logo-login">
					</div>
			
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
						<fieldset>
							<div class="form-group">
							    <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="form-group">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="form-group">
						
                                    <a href="{{ url("/pb/admin/forget-password")}}" class="pull-right" >Forget Password</a>
								
							</div>
                            <input type="submit" value="Login" class="btn  btn-lg btn-primary">
					</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	



    <script src="{{ asset("bk/assets/js/jquery-1.11.1.min.js") }}"></script>
	<script src="{{ asset("bk/assets/js/bootstrap.min.js") }}"></script>


</body>
</html>
