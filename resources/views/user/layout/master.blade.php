<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>QuadQue Technology</title>
    <!-- Bootstrap CSS -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/icon.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet" />
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fullpage.css')}}" /> --}}
    <link href="{{ asset('assets/css/custom.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('assets/css/responsiveFont.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('assets/css/responsiveLayout.css')}}" type="text/css" rel="stylesheet" />
    <style>
    
        #blog-details .blog-content .blog-text p span {
        font-size: 18px !important;
        color: #ffffff !important;
        text-align: justify !important;
            font-family: "Poppins", sans-serif !important;
            line-height: 150% !important;
        }
        html {
        scroll-behavior: smooth;
        }
        @media screen and (max-width:1366px){
              .header-content .icon {
              left: 18%;
              }

        }
    </style>

</head>
<body>
        <div class="main-wrapper">
            <div class="custom-container">
                <div class="custom-row">
                    <div class="cus-col-first">
                        @include('user.components.header')
                    </div>
                    <div class="cus-col-second">
                        <div id="app">
                       
                          @yield('content')
                       
                         
                         
                        </div>
                    </div>
                    <div class="cus-col-third">
                             @include('user.components.footer')
                       
                    </div>
                </div>
            </div>

        </div>

   

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-typical@latest/dist/vue-typical.umd.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
  {{--   <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{ asset('assets/js/fullpage/fullpage.js') }}"></script> --}}
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  

    <script>
  


    
   /*$('#fullpage').fullpage(); */
   $('.main-content').scroll(function () {

    let topHeight = $('.main-content').scrollTop();

    if(topHeight == 0){

            $('.second-page').removeClass('active-page-distance');
            $('.second-page-number').addClass('page-num-hide');
            $('.second-page-dot').removeClass('active-page-dot');
            $('.second-page-line').addClass('line-hide');


            $('.first-page').addClass('active-page-distance');
            $('.first-page-number').removeClass('page-num-hide');
            $('.first-page-dot').addClass('active-page-dot');
            $('.first-page-line').removeClass('line-hide');


    }
   
    if(topHeight >= 2 && topHeight <= 843){
      
        $('.first-page').removeClass('active-page-distance');
        $('.first-page-number').addClass('page-num-hide');
        $('.first-page-dot').removeClass('active-page-dot');
        $('.first-page-line').addClass('line-hide');


        $('.second-page').addClass('active-page-distance');
        $('.second-page-number').removeClass('page-num-hide');
        $('.second-page-dot').addClass('active-page-dot');
        $('.second-page-line').removeClass('line-hide');

        $('.third-page').removeClass('active-page-distance');
        $('.third-page-number').addClass('page-num-hide');
        $('.third-page-dot').removeClass('active-page-dot');
        $('.third-page-line').addClass('line-hide');
    

    }
    if(topHeight >= 844 && topHeight <= 1686){
      
        $('.second-page').removeClass('active-page-distance');
        $('.second-page-number').addClass('page-num-hide');
        $('.second-page-dot').removeClass('active-page-dot');
        $('.second-page-line').addClass('line-hide');


        $('.third-page').addClass('active-page-distance');
        $('.third-page-number').removeClass('page-num-hide');
        $('.third-page-dot').addClass('active-page-dot');
        $('.third-page-line').removeClass('line-hide');

        $('.fourth-page').removeClass('active-page-distance');
        $('.fourth-page-number').addClass('page-num-hide');
        $('.fourth-page-dot').removeClass('active-page-dot');
        $('.fourth-page-line').addClass('line-hide');
    

    }
    if(topHeight >= 1689 && topHeight <= 2529){
      
        $('.third-page').removeClass('active-page-distance');
        $('.third-page-number').addClass('page-num-hide');
        $('.third-page-dot').removeClass('active-page-dot');
        $('.third-page-line').addClass('line-hide');


        $('.fourth-page').addClass('active-page-distance');
        $('.fourth-page-number').removeClass('page-num-hide');
        $('.fourth-page-dot').addClass('active-page-dot');
        $('.fourth-page-line').removeClass('line-hide');

        $('.fifth-page').removeClass('active-page-distance');
        $('.fifth-page-number').addClass('page-num-hide');
        $('.fifth-page-dot').removeClass('active-page-dot');
        $('.fifth-page-line').addClass('line-hide');
    

    }
    if(topHeight >= 2533 && topHeight <= 3373){
      
        $('.fourth-page').removeClass('active-page-distance');
        $('.fourth-page-number').addClass('page-num-hide');
        $('.fourth-page-dot').removeClass('active-page-dot');
        $('.fourth-page-line').addClass('line-hide');


        $('.fifth-page').addClass('active-page-distance');
        $('.fifth-page-number').removeClass('page-num-hide');
        $('.fifth-page-dot').addClass('active-page-dot');
        $('.fifth-page-line').removeClass('line-hide');

        $('.sixth-page').removeClass('active-page-distance');
        $('.sixth-page-number').addClass('page-num-hide');
        $('.sixth-page-dot').removeClass('active-page-dot');
        $('.sixth-page-line').addClass('line-hide');
    

    }
    if(topHeight >= 3375 && topHeight <= 4216 ){

      
        $('.fifth-page').removeClass('active-page-distance');
        $('.fifth-page-number').addClass('page-num-hide');
        $('.fifth-page-dot').removeClass('active-page-dot');
        $('.fifth-page-line').addClass('line-hide');


        $('.sixth-page').addClass('active-page-distance');
        $('.sixth-page-number').removeClass('page-num-hide');
        $('.sixth-page-dot').addClass('active-page-dot');
        $('.sixth-page-line').removeClass('line-hide');

        $('.seven-page').removeClass('active-page-distance');
        $('.seven-page-number').addClass('page-num-hide');
        $('.seven-page-dot').removeClass('active-page-dot');
        $('.seven-page-line').addClass('line-hide');
    

    }
    if(topHeight >= 4217 && topHeight <= 5059 ){


      
        $('.sixth-page').removeClass('active-page-distance');
        $('.sixth-page-number').addClass('page-num-hide');
        $('.sixth-page-dot').removeClass('active-page-dot');
        $('.sixth-page-line').addClass('line-hide');


        $('.seven-page').addClass('active-page-distance');
        $('.seven-page-number').removeClass('page-num-hide');
        $('.seven-page-dot').addClass('active-page-dot');
        $('.seven-page-line').removeClass('line-hide');

        $('.eight-page').removeClass('active-page-distance');
        $('.eight-page-number').addClass('page-num-hide');
        $('.eight-page-dot').removeClass('active-page-dot');
        $('.eight-page-line').addClass('line-hide');
    

    }
    if(topHeight >= 5063  && topHeight <= 5903){



      
        $('.seven-page').removeClass('active-page-distance');
        $('.seven-page-number').addClass('page-num-hide');
        $('.seven-page-dot').removeClass('active-page-dot');
        $('.seven-page-line').addClass('line-hide');


        $('.eight-page').addClass('active-page-distance');
        $('.eight-page-number').removeClass('page-num-hide');
        $('.eight-page-dot').addClass('active-page-dot');
        $('.eight-page-line').removeClass('line-hide');

        $('.nine-page').removeClass('active-page-distance');
        $('.nine-page-number').addClass('page-num-hide');
        $('.nine-page-dot').removeClass('active-page-dot');
        $('.nine-page-line').addClass('line-hide');
    

    }
    if(topHeight >= 5907  && topHeight <= 6746){



      
        $('.eight-page').removeClass('active-page-distance');
        $('.eight-page-number').addClass('page-num-hide');
        $('.eight-page-dot').removeClass('active-page-dot');
        $('.eight-page-line').addClass('line-hide');


        $('.nine-page').addClass('active-page-distance');
        $('.nine-page-number').removeClass('page-num-hide');
        $('.nine-page-dot').addClass('active-page-dot');
        $('.nine-page-line').removeClass('line-hide');

        $('.ten-page').removeClass('active-page-distance');
        $('.ten-page-number').addClass('page-num-hide');
        $('.ten-page-dot').removeClass('active-page-dot');
        $('.ten-page-line').addClass('line-hide');
    

    }
    if(topHeight >= 6747  && topHeight <= 7589){



      
        $('.nine-page').removeClass('active-page-distance');
        $('.nine-page-number').addClass('page-num-hide');
        $('.nine-page-dot').removeClass('active-page-dot');
        $('.nine-page-line').addClass('line-hide');


        $('.ten-page').addClass('active-page-distance');
        $('.ten-page-number').removeClass('page-num-hide');
        $('.ten-page-dot').addClass('active-page-dot');
        $('.ten-page-line').removeClass('line-hide');

      
    

    }


   });



      $('.menu').click(function(){

  
      $('#menu').css('display', 'block');
      $('#menu').css('transition', 'all 10s');
      $('#menu').css('position', 'absolute');
      $('#menu').css('top', '0');
      $('#menu').css('z-index','10');

      })
      $('.cancel-menu').click(function(){
      $('#menu').css('display', 'none');
      $('#menu').css('transition', 'all 1s');
      $('#menu').css('position', 'relative');
      $('#menu').css('top', '0');
      $('#menu').css('z-index','-1');

      })



      $('.cancel-blog-details').click(function(){

      $('#blog-details').css('display', 'none');
      $('#blog-details').css('transition', 'all 2s');
      $('#blog-details').css('position', 'relative');
      $('#blog-details').css('top', '0%');
      $('#blog-details').css('z-index','-1');




      })




    
    </script>
</body>
</html>












