<!DOCTYPE html>
<html>
  <head>

  <title>Prabhu Travel - @yield('title')</title>
<link href="{{ asset('assets/img/favicon.png') }}" rel='shortcut icon' type='image/x-icon' />
<link rel="icon" href="{{ asset('assets/img/favicon-logo@2x-32x32.png') }}" sizes="32x32" />
<link href="{{ asset('assets/img/favicon-logo@2x-32x32.png') }}" rel="icon">
<link href="{{ asset('assets/img/favicon-logo@2x-32x32.png') }}" rel="apple-touch-icon">



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/indent.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">

       
    <link rel="stylesheet" href="{{ asset('assets/fonts/fi/flaticon.css') }}">

    
     <link rel="stylesheet" href="{{ asset('assets/rs-plugin/css/settings.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/rs-plugin/css/navigation.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/rs-plugin/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tuner/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

  </head>
  <body>
    <!-- header page-->
    <header>
      <!-- site top panel-->

      <!-- ! site top panel-->
      <!-- Navigation panel-->

      @include('prabhu.public.layouts.menu')

      <!-- End Navigation panel-->
    </header>
    <!-- ! header page-->


    @yield('contents')





    <!-- footer-->

    @include('prabhu.public.layouts.footer')




    <div id="scroll-top"><i class="fa fa-angle-up"></i></div>
    <!-- ! footer-->

    <!--  js scripts -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/cws_parallax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('assets/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.tweet.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/retina.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/typeahead.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>


    <script>
      $( function() {
            var availableTags = [

              <?php 
              foreach ($destinationDataAll as $rowAt ){
             echo  '"'.$rowAt->full_name.'",';
              } ?>
             
              ""
            ];
            $( "#destinations" ).autocomplete({
              source: availableTags
            });
          } );
      </script>

     <!-- ! js scripts -->
  
  
  
  </body>
</html>