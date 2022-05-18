<footer style="background-image: url('{{ asset('assets/pic/footer/footer-bg.jpg') }}')" class="footer footer-fixed">
    <div class="container">
      <div class="row pb-100 pb-md-40">
        <!-- widget footer-->
        <div class="col-md-6 col-sm-12 mb-sm-30">
          <div class="logo-soc clearfix">
            <div class="footer-logo"><a href="{{ url("/") }}"><img src="{{ asset('assets/img/logo-white.png') }}" data-at2x="{{ asset('assets/img/logo-white@2x.png') }}" alt></a></div>
          </div>
          <p class="color-g2 mt-10">Prabhu Travel work as a labour-based travel agent, we are able communicate in the language of diverse foreign workers. We can arrange seats on the flight, special baggage allowance & competitive labour fare, as we maintain the long-established excellent partnership with airlines.</p>
          <!-- social-->
          <div class="social-link dark"><a href="#" class="cws-social fa fa-twitter"></a><a href="#" class="cws-social fa fa-facebook"></a><a href="#" class="cws-social fa fa-google-plus"></a><a href="#" class="cws-social fa fa-linkedin"></a></div>
          <!-- ! social-->
        </div>
        <!-- ! widget footer-->
        <!-- widget footer-->
        <div class="col-md-3 col-sm-6 mb-sm-30">
        <div class="widget-footer">
            <h4>Popular Destinations</h4>
            <div class="widget-tags-wrap">

              @foreach ($destinationData as $row )

              <a href="{{ url("/search/top") }}/{{ $row->short_name }}" rel="tag" class="tag">{{ $row->full_name }}</a>
              
              @endforeach

              </div>
          </div>
        </div>
        <!-- end widget footer-->
        <!-- widget footer-->
        <div class="col-md-3 col-sm-6">
          <div class="widget-footer">
            <h4>Tour Category</h4>
            <div class="widget-tags-wrap">
              
              @foreach ($tourTypeData as $row )

                <a href="{{ url("/search/type") }}/{{ $row->short_name }}" rel="tag" class="tag">{{ $row->full_name }}</a>
              
              @endforeach  

              </div>
          </div>
        </div>
        <!-- end widget footer-->
      </div>
    </div>
    <!-- copyright-->
    <div class="copyright"> 
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>© Copyright <?php echo date("Y"); ?> <span>Prabhu Travel</span> &nbsp;&nbsp;|&nbsp;&nbsp; All Rights Reserved</p>
          </div>
          <div class="col-sm-6 text-right"><a href="{{ url('/')}}" class="footer-nav">Home</a><a href="{{ url('/about')}}" class="footer-nav">About</a><a href="{{ url('/licenses')}}" class="footer-nav">Licensing</a><a href="{{ url('/services')}}" class="footer-nav">Services</a><a href="{{ url('/search')}}" class="footer-nav">Search</a><a href="{{ url('/contact')}}" class="footer-nav">Contact</a></div>
        </div>
      </div>
    </div>
    <!-- end copyright-->
    <!-- scroll top-->
  </footer>