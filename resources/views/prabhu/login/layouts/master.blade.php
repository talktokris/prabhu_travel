<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Prabhu Travel Admin Panel - @yield('title')</title>

	<link rel="icon" href="{{ asset("/assets/img/favicon-logo@2x-32x32.png") }}" sizes="32x32" />
<link href="{{ asset("/assets/assets/img/assets/img/favicon-logo@2x-32x32.png") }}" rel="icon">
<link href="{{ asset("/assets/assets/img/img/favicon-logo@2x-32x32.png") }}" rel="apple-touch-icon">

	<link href="{{ asset("bk/assets/css/bootstrap.min.css") }}" rel="stylesheet">


	
	<link href="{{ asset("bk/assets/css/font-awesome.min.css") }}" rel="stylesheet">
	<link href="{{ asset("bk/assets/css/datepicker3.css") }}" rel="stylesheet">

	<link href="{{ asset("bk/assets/css/styles.css") }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset("bk/assets/DataTables/css/jquery.dataTables.css") }}">



	@stack('styles')



</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">

        <div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Prabhu </span>Travel</a>
				<ul class="nav navbar-top-links navbar-right">
			
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" style="width: auto !important ;" href="#">
						<em class="fa fa-user"></em> 
						@guest {{ "" }}  @else  Login as : {{ Auth::user()->name }} @endguest
						@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                 
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-user"></em> Profile Informations</div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
                                <div><em class="fa fa-lock"></em> Security Setting</div>
							</a></li>
                            <li class="divider"></li>
							<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <div><em class="fa fa-power-off"></em> Account Logout</div>
							</a>
					
						 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
						
						</li>
						
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

        @include('prabhu.login.layouts.menu')

	</div>
	
	<!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        





        @yield('contents')






	</div>	<!--/.main-->
	
	<script src="{{ asset("bk/assets/js/jquery-1.11.1.min.js") }}"></script>
	<script src="{{ asset("bk/assets/js/bootstrap.min.js") }}"></script>

 <!--
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script> -->


 
<script type="text/javascript" charset="utf8" src="{{ asset("bk/assets/DataTables/js/datatables.js") }}"></script>

<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>


	


	<script src="{{ asset("bk/assets/js/bootstrap-datepicker.js") }}"></script>
	<script src="{{ asset("bk/assets/js/custom.js") }}"></script>


	<script>





	</script>


	
		
</body>
</html>