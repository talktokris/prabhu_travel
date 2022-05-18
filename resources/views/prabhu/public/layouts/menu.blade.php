<nav class="main-nav js-stick">

     
  <div class="full-wrapper relative clearfix container">
    <!-- Logo ( * your text or image into link tag *)-->
    <div class="nav-logo-wrap local-scroll"><a href="{{ url("/") }}" class="logo"><img src="{{ asset('assets/img/logo.png') }}" data-at2x="{{ asset('assets/img/logo@2x.png') }}" alt></a></div>
    <!-- Main Menu-->
    <div class="inner-nav desktop-nav">
      <ul class="clearlist">
        <!-- Item With Sub-->
        <li><a href="{{ url("/") }}" class="mn-has-sub active">Home </a></li>

        <li class="slash">/</li>
        <!-- Item With Sub-->
        <li><a href="#" class="mn-has-sub">About <i class="fa fa-angle-down button_open"></i></a>
          <!-- Sub-->
            <ul class="mn-sub">
            <li><a href="{{ url("/about") }}">About us</a></li>
                  
                  <li><a href="{{ url("/services") }}">Services</a></li>
                <?php /*   <li><a href="gallery.php">Galley</a></li> */ ?>
                  <li><a href="{{ url("/licenses") }}">Licensing</a></li>
              
            </li>
            </ul>
          </li>
          <!-- End Sub-->
        <!-- End Item With Sub-->
        <li class="slash">/</li>
        <!-- Item With Sub-->
        <li><a href="#" class="mn-has-sub">Destinations <i class="fa fa-angle-down button_open"></i></a>
          <!-- Sub-->
            <ul class="mn-sub">

    
              @foreach ($destinationData as $row )
                  <li><a href="{{ url("/search/top") }}/{{ $row->short_name }}">{{ $row->full_name }}</a></li>
              @endforeach

            </li>
            </ul>
          </li>
          <!-- End Sub-->
        <!-- End Item With Sub-->
       
           <li class="slash">/</li>
        <!-- Item With Sub-->
        <li><a href="#" class="mn-has-sub">Tour Category <i class="fa fa-angle-down button_open"></i></a>
          <!-- Sub-->
            <ul class="mn-sub">

              @foreach ($tourTypeData as $row )
                  <li><a href="{{ url("/search/type") }}/{{ $row->short_name }}">{{ $row->full_name }}</a></li>
              @endforeach

            </li>
            </ul>
          </li>
 
        <!-- Item-->
   
        <li class="slash">/</li>

        <li><a href="{{ url("/contact") }}">Contact</a></li>
        <!-- End Item-->
        <!-- Search-->
        <li class="search"><a href="{{ url("/search") }}" class="mn-has-subs">Search</a>
        
        </li>
        <!-- End Search-->
      </ul>
    </div>
    <!-- End Main Menu-->
  </div>
</nav>