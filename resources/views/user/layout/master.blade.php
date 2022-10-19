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
    <link href="{{ asset('assets/css/custom.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('assets/css/desktop.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('assets/css/mobile.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('assets/css/responsiveFont.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('assets/css/responsiveLayout.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('assets/css/animate.css')}}" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fullpage.css')}}" />

    <link rel="stylesheet" href="{{ asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css')}}">

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
                    <div class="cus-col-first d-none d-xl-block">
                        @include('user.components.header')
                    </div>
                    <div class="cus-col-second">
                        <div id="app">
                       
                          @yield('content')
                       
                        </div>
                    </div>
                    <div class="cus-col-third  d-none d-xl-block">

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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.animateTyping.js') }}"></script>

    <!-- This following line is optional. Only necessary if you use the option css3:false and you want to use other easing effects rather than "easeInOutCubic". -->
    <script src="{{ asset('assets/js/easings.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"></script>

    <script type="text/javascript" src="{{ asset('assets/js/fullpage.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('assets/js/slick.js') }}"></script>



    <script>
    //case study slide for mobile version
    $(document).ready(function(){

       
            $(".mob-casestudy-carousel .owl-carousel").owlCarousel({
                  
                    loop:true,
                    animateIn:true,
                    dots:false,
                    nav:true,
                    autoplay:true,
                    responsiveClass:true,
                    navText:['Prev','Next'],
                    center:true,
                    responsive : {
                    // breakpoint from 0 up
                    0 : {
                    items:1,
                    nav:true

            },
        
            }

            });
            
             $("#mobile-client .owl-carousel").owlCarousel({
             loop:true,
             dots:false,
             nav:true,
             autoplay:true,
            responsiveClass:true,
            navText:['Prev','Next'],
            responsive : {
            // breakpoint from 0 up
            0 : {
            items:1,
           

            },
        
            }

            });

             $('.slick-service').slick({
                      autoplay: true,
                      prevArrow:'',
                      nextArrow:'',
                      dots: true,
                      infinite: false,
                      speed: 300,
                      slidesToShow: 4,
                      slidesToScroll: 4,
                      responsive: [
                       
                        {
                          breakpoint: 480,
                          settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                          }
                        }
                        // You can unslick at a given breakpoint now by adding:
                        // settings: "unslick"
                        // instead of a settings object
                      ]
            });
        
         $('#fullpage').fullpage({

           anchors: ['home', 'category','customer','about', 'caseStudy', 'testimonial', 'media','blog','startProject','contact'],
           menu: '#myMenu', 


             onLeave: (origin, destination, direction, trigger) => {

                    //const section = destination.item;
                    const tl  = new TimelineMax({delay:0.5});
                    if(destination.index === 1){
                        const category_header = document.querySelector('.category-heading');
                        const category_details = document.querySelector('.category-details');
                        const project_menu_list = document.querySelector('.project-menu-list');

                        tl.fromTo(category_header, 0.7, {x:"-200%"}, {x: "0%"})
                        tl.fromTo(category_details, 0.7, {x:"-200%"}, {x: "0%"})
                        tl.fromTo(project_menu_list, 0.7, {x:"250%"}, {x: "0%"})

                    }
                    if(destination.index === 2){
                        const customers_text = document.querySelector('.customers-text');
                        tl.fromTo(customers_text, 0.7, {y:"-250%"}, {y: "0%"})

                    }
                    if(destination.index === 4){
                        const case_study_text = document.querySelector('.case-study-text');
                        tl.fromTo(case_study_text, 0.7, {y:"250%"}, {y: "0%"})
                    
                        const first_casestudy_section = document.querySelector('.first-casestudy-section');
                        tl.fromTo(first_casestudy_section, 0.7, {x:"250%"}, {x: "0%"})

                        const more_company = document.querySelector('.more-company');
                        tl.fromTo(more_company, 0.7, {x:"-400%"}, {x: "0%"})

                        const second_casestudy_section = document.querySelector('.second-casestudy-section');
                        tl.fromTo(second_casestudy_section, 0.7, {x:"-250%"}, {x: "0%"})


                    }
                    if(destination.index === 5){
                        const testimonial_first_sec = $('#testimonial .first-section');
                        tl.fromTo(testimonial_first_sec, 0.7, {x:"-250%"}, {x: "0%"})

                        const testimonial_second_sec = $('#testimonial .second-section');
                        tl.fromTo(testimonial_second_sec, 0.7, {x:"250%"}, {x: "0%"})

                    }
                    if(destination.index === 6){
                        const media_bg_h1 = $('.media-bg h1');
                        tl.fromTo(media_bg_h1, 0.7, {y:"-250%"}, {y: "0%"})


                        const media_img = $('.media-bg .media-img');
                        tl.fromTo(media_img, 0.7, {x:"250%"}, {x: "0%"})

                        const media_bg_p = $('.media-bg p');
                        tl.fromTo(media_bg_p, 0.7, {x:"250%"}, {x: "0%"})

                        /*const media_bg_project_btn = $('.media-bg .project-btn');
                        tl.fromTo(media_bg_project_btn, 0.7, {y:"-250%"}, {y: "0%"})*/
                    }
                    if(destination.index === 7){

                        const blog_first_section = $('#blog .first-section');
                        tl.fromTo(blog_first_section, 0.7, {x:"-250%"}, {x: "0%"})

                        const blog_second_section = $('#blog .second-section');
                        tl.fromTo(blog_second_section, 0.7, {y:"-250%"}, {y: "0%"})

                        const blog_third_section = $('#blog .third-section');
                        tl.fromTo(blog_third_section, 0.7, {y:"-250%"}, {y: "0%"})

                        const blog_fourth_section = $('#blog .fourth-section');
                        tl.fromTo(blog_fourth_section, 0.7, {y:"-250%"}, {y: "0%"})

                    }
                    if(destination.index === 8){

                        const start_project_header = $('#startProject .header');
                        tl.fromTo(start_project_header, 0.7, {x:"-250%"}, {x: "0%"})


                        const start_project_menu_list = $('#startProject .project-menu-list');
                        tl.fromTo(start_project_menu_list, 0.7, {y:"250%"}, {y: "0%"})

                        const start_project_social_media = $('#startProject .social-media');
                        tl.fromTo(start_project_social_media, 0.7, {y:"250%"}, {y: "0%"})

                        const start_project_contact_form = $('#startProject .contact-form');
                        tl.fromTo(start_project_contact_form, 0.7, {y:"250%"}, {y: "0%"})

                    }
                    if(destination.index === 9){

                        const contact_header = $('#contact h1');
                        tl.fromTo(contact_header, 0.7, {y:"-250%"}, {y: "0%"})

                        const contact_text = $('#contact .text p');
                        tl.fromTo(contact_text, 0.7, {x:"-250%"}, {x: "0%"})

                        const contact_product = $('#contact .product');
                        tl.fromTo(contact_product, 0.7, {y:"250%"}, {y: "0%"})

                        const contact_usecase = $('#contact .usecase');
                        tl.fromTo(contact_usecase, 0.7, {y:"250%"}, {y: "0%"})

                        const contact_resource = $('#contact .resources');

                        tl.fromTo(contact_resource, 0.7, {y:"250%"}, {y: "0%"})
                        const contact_company = $('#contact .company');
                        tl.fromTo(contact_company, 0.7, {y:"250%"}, {y: "0%"})

                        const contact_social_icon = $('#contact .social-icon');
                        tl.fromTo(contact_social_icon, 0.7, {y:"250%"}, {y: "0%"})



                      
                    }
                  

            }
      
         });

    
/*
                let first_page = document.querySelector('.fp-viewing-0');
                if(first_page){
                $('.second-page').removeClass('active-page-distance');
                $('.second-page-number').addClass('page-num-hide');
                $('.second-page-dot').removeClass('active-page-dot');
                $('.second-page-line').addClass('line-hide');


                $('.first-page').addClass('active-page-distance');
                $('.first-page-number').removeClass('page-num-hide');
                $('.first-page-dot').addClass('active-page-dot');
                $('.first-page-line').removeClass('line-hide'); 


                }*/


         //methods
    
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
         $("#fullpage").css("display", "block");


      $('#blog-details').css('display', 'none');
      $('#blog-details').css('transition', 'all 2s');
      $('#blog-details').css('position', 'relative');
      $('#blog-details').css('top', '0%');
      $('#blog-details').css('z-index','-1');




      })





    
    </script>


</body>
</html>












