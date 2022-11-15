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
    <link href="{{ asset('assets/css/desktop.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('assets/css/mobile.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('assets/css/responsiveFont.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('assets/css/responsiveLayout.css')}}" type="text/css" rel="stylesheet" />
{{--     <link href="{{ asset('assets/css/animate.css')}}" type="text/css" rel="stylesheet" /> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fullpage.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css')}}">
    <link href="{{ asset('assets/css/custom.css')}}" type="text/css" rel="stylesheet" />
 
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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-typical@latest/dist/vue-typical.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="{{ asset('assets/js/jquery.animateTyping.js') }}"></script>
    <script src="{{ asset('assets/js/easings.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/fullpage.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>



    <script>
 

    //case study slide for mobile version
    $(document).ready(function(){

        /***** Media Page Animated Chart js ******/
        const ctx = document.getElementById('myChart');
        let delayed;

        const chart = new Chart(ctx, {
        type: 'line',
        data: {
        labels: ['Jan', 'Feb', 'March', 'April', 'May', 'June'],
        datasets: [{
        borderColor:'#FF0066',
        backgroundColor:'#fff',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 10,
        label:'2021'
        },
        {
        borderColor:'#0000FF',
        backgroundColor:'#fff',
        data: [8, 16, 8, 20, 12, 17],
        borderWidth: 10,
        label:'2022'
        },
        
        ]
        },
        options: {
             animations: {
                tension: {
                    duration: 1000,
                    easing:'linear',


                    from: 1,
                    to: 0,
                    loop: true
                }
             },

             plugins: {
                legend: {
                    labels: {
                    // This more specific font property overrides the global property
                            font: {
                            size: 40,
                            color:'white'
                            }
                    }
                }
             },

        scales: {
            y: { // defining min and max so hiding the dataset does not change scale range
              min: 0,
              max: 100
              }
,
            x: {
               ticks: {
                color:'white',
                font: {
                size: 40,
               
                }
             }
           },
           y: {
              
                ticks: {
                     color:'white',
                    font: {
                    size: 40,
                
                    }
             }
           }
        }
        }
        });


          var wow = new WOW(
          {
          boxClass: 'wow', // animated element css class (default is wow)
          animateClass: 'animated', // animation css class (default is animated)
          offset: 0, // distance to the element when triggering the animation (default is 0)
          mobile: true, // trigger animations on mobile devices (default is true)
          live: true, // act on asynchronously loaded content (default is true)
          callback: function(box) {
          // the callback is fired every time an animation is started
          // the argument that is passed in is the DOM node being animated
          },
          scrollContainer: null // optional scroll container selector, otherwise use window
          }
          );
          wow.init();;




            /* case study for mobile version */
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

             /* owl carousel for client in mobile version */
            
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


            /* slick carousel for mobile version */

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
                      ]
            });

    
        /* full page scroll for desktop version */        
         $('#fullpage').fullpage({
             onLeave: (origin, destination, direction, trigger) => {

                    //const section = destination.item;
                    const tl  = new TimelineMax({delay:0.5});
                    if(destination.index === 1){
                        const category_header = document.querySelector('.category-heading');
                        const category_details = document.querySelector('.category-details');
                        const project_menu_list = document.querySelector('.project-menu-list');

                        tl.fromTo(category_header, 0.5, {x:"-200%"}, {x: "0%"})
                        tl.fromTo(category_details, 0.5, {x:"-200%"}, {x: "0%"})
                        tl.fromTo(project_menu_list, 0.5, {x:"250%"}, {x: "0%"})

                    }
                    if(destination.index === 2){
                        const customers_text = document.querySelector('.customers-text');
                        tl.fromTo(customers_text, 0.5, {y:"-250%"}, {y: "0%"})

                    }
                    if(destination.index === 4){
                        const case_study_text = document.querySelector('.case-study-text');
                        tl.fromTo(case_study_text, 0.5, {y:"250%"}, {y: "0%"})
                    
                        const first_casestudy_section = document.querySelector('.first-casestudy-section');
                        tl.fromTo(first_casestudy_section, 0.5, {x:"250%"}, {x: "0%"})

                        const more_company = document.querySelector('.more-company');
                        tl.fromTo(more_company, 0.5, {x:"-450%"}, {x: "0%"})

                        const second_casestudy_section = document.querySelector('.second-casestudy-section');
                        tl.fromTo(second_casestudy_section, 0.5, {x:"-250%"}, {x: "0%"})


                    }
                    if(destination.index === 5){
                        const testimonial_first_sec = $('#testimonial .first-section');
                        tl.fromTo(testimonial_first_sec, 0.5, {x:"-250%"}, {x: "0%"})

                        const testimonial_second_sec = $('#testimonial .second-section');
                        tl.fromTo(testimonial_second_sec, 0.5, {x:"250%"}, {x: "0%"})

                    }
                    if(destination.index === 6){
                        const media_bg_h1 = $('.media-bg h1');
                        tl.fromTo(media_bg_h1, 0.5, {y:"-250%"}, {y: "0%"})


                        const media_img = $('.media-bg .media-img');
                        tl.fromTo(media_img, 0.5, {x:"250%"}, {x: "0%"})

                        const media_bg_p = $('.media-bg p');
                        tl.fromTo(media_bg_p, 0.5, {x:"250%"}, {x: "0%"})

                        /*const media_bg_project_btn = $('.media-bg .project-btn');
                        tl.fromTo(media_bg_project_btn, 0.5, {y:"-250%"}, {y: "0%"})*/
                    }
                    if(destination.index === 7){

                        const blog_first_section = $('#blog .first-section');
                        tl.fromTo(blog_first_section, 0.5, {x:"-250%"}, {x: "0%"})

                        const blog_second_section = $('#blog .second-section');
                        tl.fromTo(blog_second_section, 0.5, {y:"-250%"}, {y: "0%"})

                        const blog_third_section = $('#blog .third-section');
                        tl.fromTo(blog_third_section, 0.5, {y:"-250%"}, {y: "0%"})

                        const blog_fourth_section = $('#blog .fourth-section');
                        tl.fromTo(blog_fourth_section, 0.5, {y:"-250%"}, {y: "0%"})

                    }
                    if(destination.index === 8){

                        const start_project_header = $('#startProject .header');
                        tl.fromTo(start_project_header, 0.5, {x:"-250%"}, {x: "0%"})


                        const start_project_menu_list = $('#startProject .project-menu-list');
                        tl.fromTo(start_project_menu_list, 0.5, {y:"250%"}, {y: "0%"})

                        const start_project_social_media = $('#startProject .social-media');
                        tl.fromTo(start_project_social_media, 0.5, {y:"270%"}, {y: "0%"})

                        const start_project_contact_form = $('#startProject .contact-form');
                        tl.fromTo(start_project_contact_form, 0.5, {y:"250%"}, {y: "0%"})

                    }
                    if(destination.index === 9){

                        const contact_header = $('#contact h1');
                        tl.fromTo(contact_header, 0.4, {y:"-250%"}, {y: "0%"})

                        const contact_text = $('#contact .text p');
                        tl.fromTo(contact_text, 0.4, {x:"-250%"}, {x: "0%"})

                        const contact_product = $('#contact .product');
                        tl.fromTo(contact_product, 0.4, {y:"250%"}, {y: "0%"})

                        const contact_usecase = $('#contact .usecase');
                        tl.fromTo(contact_usecase, 0.4, {y:"250%"}, {y: "0%"})

                        const contact_resource = $('#contact .resources');

                        tl.fromTo(contact_resource, 0.4, {y:"250%"}, {y: "0%"})
                        const contact_company = $('#contact .company');
                        tl.fromTo(contact_company, 0.4, {y:"250%"}, {y: "0%"})

                        const contact_social_icon = $('#contact .social-icon');
                        tl.fromTo(contact_social_icon, 0.4, {y:"250%"}, {y: "0%"})
                     
                        let image = document.getElementById("quadque_logo");
                        image.style.transition = "all 8s";
                        if(image.getAttribute('rotate') == 0){

                            image.style.transform = "rotate(360deg)";
                            image.setAttribute('rotate', 360);

                        }else{
                               image.style.transform = "rotate(0deg)";
                               image.setAttribute('rotate', 0);

                        }
                       
                       






                      
                    }
                  

            }
      
         });
    
    });

      window.onscroll = function () {
      scrollRotate();
      };

      function scrollRotate() {
      let image = document.getElementById("quadque_logo");

      image.style.transform = "rotate(360deg)";
      }


      // menu show  for desktop version
      
      $('.menu').click(function(){
  
      $('#menu').css('display', 'block');
      $('#menu').css('transition', 'all 10s');
      $('#menu').css('position', 'absolute');
      $('#menu').css('top', '0');
      $('#menu').css('z-index','10');

      })


      // menu hide for desktop version

      $('.cancel-menu').click(function(){

      $('#menu').css('display', 'none');
      $('#menu').css('transition', 'all 1s');
      $('#menu').css('position', 'relative');
      $('#menu').css('top', '0');
      $('#menu').css('z-index','-1');

      })


    // cancel blog details modal page for desktop verison
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












