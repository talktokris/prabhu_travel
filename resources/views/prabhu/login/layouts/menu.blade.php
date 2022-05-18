
		<ul class="nav menu">
			<li class="active"><a href="{{ url("pb/admin/dashboard") }}"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>


            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-calendar">&nbsp;</em> Packages <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
                    <li><a class="" href="{{ url("pb/admin/package-create") }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Create Package
					</a></li>

					<li><a class="" href="{{ url("pb/admin/package-search") }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Search Package
					</a></li>
			
					
				</ul>
			</li>
			
			<li><a class="" href="{{ url("pb/admin/booking-search") }}"><span class="fa fa-arrow-right">&nbsp;</span> Bookings</a></li>

			</li>

		


           
          
			<li class="parent "><a data-toggle="collapse" href="#sub-item-4">
				<em class="fa fa-gears">&nbsp;</em> Settings <span data-toggle="collapse" href="#sub-item-4" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-4">
                    <li><a class="" href="{{ url("pb/admin/setting-home-page") }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Home Pages Setup
					</a></li>

					<li><a class="" href="{{ url("pb/admin/setting-tour-category") }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Tour Categories Setup
					</a></li>
					<li><a class="" href="{{ url("pb/admin/setting-destination") }}">
						<span class="fa fa-arrow-right">&nbsp;</span>  Destinations Setup
					</a></li>
					
				</ul>
			</li>
<?php /*
            <li><a href="{{ url("pb/admin/users") }}"><em class="fa fa-users">&nbsp;</em> Users</a></li>
			*/?>
            <li><a  href="{{ route('logout') }}"
				onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> 
				<em class="fa fa-power-off">&nbsp;</em> 
				 {{ __('Logout') }}
			 </a>
		
			 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
				@csrf
			</form>
			</li>

		</ul>