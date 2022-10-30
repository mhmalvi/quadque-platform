
@extends('user.layout.master')
@section('content')



    <!--------------- Mobile header section ----------------------->
    <div id="mobile-version">
             @include('user.components.mobile-header')
             @include('user.components.menu')
            

             <!--------------- Mobile home section ----------------------->
                <section id="mobile-home">
                    <div class="hero-text wow slideInLeft" data-wow-delay=".5s">

                        <h1>We Build Awesome Creation</h1>
                    </div>
                    <div class="hero-contact-us wow slideInRight" data-wow-delay=".5s">

                        Contact Us<a href="#mobile-contact"><img src="{{ asset('assets/img/contact-icon.png') }}" /></a>

                    </div>
                    <div class="mobile-hero-video">
                        <video autoplay loop muted>
                            <source src="{{ asset('/assets/bg-video/header-video-3.mp4') }}" type="video/mp4" />

                        </video>
                    </div>
                    <div class="lower-section d-flex justify-content-between">
                        <div class="home-start-project"><a href="#">Start Project</a></div>
                        <div class="home-language"><a href="#">EN</a><a href="#">BN</a></div>
                    </div>
                </section>


    <!--  mobile service -->
        <section id="mobile-service" >

            <div class="mob-service-main-content">
                <div class="mob-carousel">
                    <div class="slick-service">
                        <div class="carousel-content">
                            <div class="lottie">
                                <img src="{{asset('assets/img/services-carousel/ux.gif')}}">
                            </div>

                            <h1>UI/UX</h1>
                            <div></div>

                            <p>
                                We create premium web design, thoughtful and user-friendly that
                                solve business problems We create premium web design, thoughtful
                                and user-friendly that solve business problems
                            </p>
                            <div class="slide-name row gx-3">
                                <div class="prev-page col-4">AI & IoT Solutions</div>
                                <div class="current-page col-4">UI/UX</div>
                                <div class="next-page col-4">digital marketing</div>
                            </div>
                           
                        
                        </div>
                        <div class="carousel-content">
                            <div class="lottie">
                                  <img src="{{asset('assets/img/services-carousel/dm.gif')}}">
                            </div>
                            <h1>Digital <br />Marketing</h1>
                            <p>
                                We create premium web design, thoughtful and user-friendly that
                                solve business problems We create premium web design, thoughtful
                                and user-friendly that solve business problems
                            </p>
                            <div class="slide-name row gx-3">
                                <div class="prev-page col-4">UI/UX</div>
                                <div class="current-page col-4">digital marketing</div>
                                <div class="next-page col-4">mobile app marketing</div>
                            </div>
                        </div>
                        <div class="carousel-content">
                            <div class="lottie">
                                  <img src="{{asset('assets/img/services-carousel/wd.gif')}}">
                            </div>
                            <h1>web development</h1>
                            <p>
                                We create premium web design, thoughtful and user-friendly that
                                solve business problems We create premium web design, thoughtful
                                and user-friendly that solve business problems
                            </p>

                            <div class="slide-name row gx-3">
                                <div class="prev-page col-4">digital markting</div>
                                <div class="current-page col-4">web development</div>
                                <div class="next-page col-4">software development</div>
                            </div>
                        </div>
                        <div class="carousel-content">
                            <div class="lottie">
                                  <img src="{{asset('assets/img/services-carousel/sd.gif')}}">
                            </div>
                            <h1>software development</h1>
                            <p>
                                We create premium web design, thoughtful and user-friendly that
                                solve business problems We create premium web design, thoughtful
                                and user-friendly that solve business problems
                            </p>
                            <div class="slide-name row gx-3">
                                <div class="prev-page col-4">web development</div>
                                <div class="current-page col-4">software development</div>
                                <div class="next-page col-4">AI & IoT Solutions</div>
                            </div>
                        </div>
                        <div class="carousel-content">
                            <div class="lottie">
                                  <img src="{{asset('assets/img/services-carousel/ai.gif')}}">
                            </div>
                            <h1>AI & IoT Solutions</h1>
                            <p>
                                We create premium web design, thoughtful and user-friendly that
                                solve business problems We create premium web design, thoughtful
                                and user-friendly that solve business problems
                            </p>
                            <div class="slide-name row gx-3">
                                <div class="prev-page col-4">software development</div>
                                <div class="current-page col-4">AI & IoT Solutions</div>
                                <div class="next-page col-4">UI/UX</div>
                            </div>
                        </div>

                       
                    </div>
                    <div class="d-flex justify-content-between carousel-controller">
                        <div><a href="#mobile-start-project">Start Project</a></div>
                        <div><button onclick="showNext(this)">Next</button></div>
                    </div>
                </div>
            </div>
        </section>

                <!--------------- Mobile customer section ----------------------->

                <section id="mobile-customers">


                    <div class="customer-text">


                           <h2>More then valuable <span>100</span>coustomers</h2>

                    
                        <p>
                            We create premium web design, though and user-friendly that solve
                            business problems We create premium web design.
                        </p>
                    </div>
                    <div class="customer-gallery">
                        <div class="d-flex justify-content-between">
                            <div><img src="{{ asset('/assets/img/customers/atr.svg') }}" /></div>


                            <div><img src="{{ asset('/assets/img/customers/otobi.svg') }}" /></div>


                        </div>
                        <div class="d-flex justify-content-between">
                            <div><img src="{{ asset('/assets/img/customers/ibm.svg') }}" /></div>


                            <div><img src="{{ asset('/assets/img/customers/nta.svg') }}" /></div>


                        </div>
                        <div class="d-flex justify-content-between">
                            <div><img src="{{ asset('/assets/img/customers/officemate.svg') }}" /></div>


                            <div><img src="{{ asset('/assets/img/customers/toptrip.svg') }}" /></div>


                        </div>
                        <div class="d-flex justify-content-between">
                            <div><img src="{{ asset('/assets/img/customers/marriage.svg') }}" /></div>


                            <div><img src="{{ asset('/assets/img/customers/otobi.svg') }}" /></div>


                        </div>
                    </div>
                </section>

                <!--------------- Mobile case study section----------------------->

               <section id="mobile-caseStudy">

                    <div class="caseStudy-text">
                        <h1>Case study</h1>
                        <p>We create premium web design, though and user</p>
                        <a href="{{ url('/casestudy/details') }}">Details</a>

                    </div>
                    <div class="mob-casestudy-carousel">
                         
                            <!-- Set up your HTML -->
                            <div class="owl-carousel owl-theme">
                              <div class="item"> <img src="http://127.0.0.1:8000/assets/img/case_study/1661245065.png"> </div>
                              <div class="item"><img src="http://127.0.0.1:8000/assets/img/case_study/1661245283.png">  </div>
                              <div class="item"> <img src="http://127.0.0.1:8000/assets/img/case_study/1661245392.png"> </div>
                              <div class="item"> <img src="http://127.0.0.1:8000/assets/img/case_study/1661252794.png"> </div>
                              <div class="item"> <img src="http://127.0.0.1:8000/assets/img/case_study/1661252794.png">  </div>
                             
                            </div>

                    </div>

                  
                </section>

                <!--------------- Mobile client section ----------------------->

                <section id="mobile-client">

                    <h1>Our clients speak</h1>
                     <div class="owl-carousel owl-theme">
                              <div class="item"> 
                                      <div class="mob-client-carousel">
                            <div class="client-details d-flex justify-content-between">
                                <p>Sourab Sen</p>
                                <p>Texlab CEO</p>
                            </div>
                            <div class="mob-client-img">
                                <img src="{{ asset('/assets/img/client_img.svg') }}" />

                            </div>
                            <div class="client-comment">
                                <p>
                                    We create premium web design, though and user Business Analytics
                                    is not based on rote memorization of equations or facts, but
                                    focuses on honing your understanding of key concepts, your
                                    managerial judgment, and your ability to apply course concepts to
                                    real business problems. This course begins with basic descriptive
                                    statistics and progresses to regression analysis.
                                </p>
                            </div>
                        </div>
                               </div>
                              <div class="item">  <div class="mob-client-carousel">
                            <div class="client-details d-flex justify-content-between">
                                <p>Sourab Sen</p>
                                <p>Texlab CEO</p>
                            </div>
                            <div class="mob-client-img">
                                <img src="{{ asset('/assets/img/client_img.svg') }}" />

                            </div>
                            <div class="client-comment">
                                <p>
                                    We create premium web design, though and user Business Analytics
                                    is not based on rote memorization of equations or facts, but
                                    focuses on honing your understanding of key concepts, your
                                    managerial judgment, and your ability to apply course concepts to
                                    real business problems. This course begins with basic descriptive
                                    statistics and progresses to regression analysis.
                                </p>
                            </div>
                        </div> </div>
                              <div class="item">   <div class="mob-client-carousel">
                            <div class="client-details d-flex justify-content-between">
                                <p>Sourab Sen</p>
                                <p>Texlab CEO</p>
                            </div>
                            <div class="mob-client-img">
                                <img src="{{ asset('/assets/img/client_img.svg') }}" />

                            </div>
                            <div class="client-comment">
                                <p>
                                    We create premium web design, though and user Business Analytics
                                    is not based on rote memorization of equations or facts, but
                                    focuses on honing your understanding of key concepts, your
                                    managerial judgment, and your ability to apply course concepts to
                                    real business problems. This course begins with basic descriptive
                                    statistics and progresses to regression analysis.
                                </p>
                            </div>
                        </div></div>
                              <div class="item">   <div class="mob-client-carousel">
                            <div class="client-details d-flex justify-content-between">
                                <p>Sourab Sen</p>
                                <p>Texlab CEO</p>
                            </div>
                            <div class="mob-client-img">
                                <img src="{{ asset('/assets/img/client_img.svg') }}" />

                            </div>
                            <div class="client-comment">
                                <p>
                                    We create premium web design, though and user Business Analytics
                                    is not based on rote memorization of equations or facts, but
                                    focuses on honing your understanding of key concepts, your
                                    managerial judgment, and your ability to apply course concepts to
                                    real business problems. This course begins with basic descriptive
                                    statistics and progresses to regression analysis.
                                </p>
                            </div>
                        </div> </div>
                              <div class="item">  <div class="mob-client-carousel">
                            <div class="client-details d-flex justify-content-between">
                                <p>Sourab Sen</p>
                                <p>Texlab CEO</p>
                            </div>
                            <div class="mob-client-img">
                                <img src="{{ asset('/assets/img/client_img.svg') }}" />

                            </div>
                            <div class="client-comment">
                                <p>
                                    We create premium web design, though and user Business Analytics
                                    is not based on rote memorization of equations or facts, but
                                    focuses on honing your understanding of key concepts, your
                                    managerial judgment, and your ability to apply course concepts to
                                    real business problems. This course begins with basic descriptive
                                    statistics and progresses to regression analysis.
                                </p>
                            </div>
                        </div> </div>
                             
                      </div>
                   
                </section>

                <!--------------- Mobile about us section ----------------------->

                <section id="mobile-aboutus">

                    <h1>About us</h1>
                    <div class="aboutus-img">
                        <img src="{{ asset('/assets/img/mob_about_us.svg') }}" />
                    </div>
                    <div class="aboutus-progressbar"></div>
                    <div class="aboutus-scrollbox">
                        <div class="scroll-item">
                            <h4>This is the second feature</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                                ultricies tristique...
                            </p>
                        </div>
                        <div class="scroll-item">
                            <h4>This is the second feature</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                                ultricies tristique...
                            </p>
                        </div>
                        <div class="scroll-item">
                            <h4>This is the second feature</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                                ultricies tristique...
                            </p>
                        </div>
                        <div class="scroll-item">
                            <h4>This is the second feature</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                                ultricies tristique...
                            </p>
                        </div>
                        <div class="scroll-item">
                            <h4>This is the second feature</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                                ultricies tristique...
                            </p>
                        </div>
                        <div class="scroll-item">
                            <h4>This is the second feature</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                                ultricies tristique...
                            </p>
                        </div>
                    </div>
                </section>


                <!--------------- Mobile media buying section ----------------------->

                <section id="mobile-media">

                    <h1>Our Media Buying</h1>
                    <p class="mob-media-text">
                        Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                        ultricies tristique...
                    </p>
                    <div class="mob-media-img">
                        <img src="{{ asset('/assets/img/media_buying.svg') }}" />

                    </div>
                    <div class="mob-client-start-project">
                        <a href="#">Start Project</a>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                            ultricies tristique nulla enim tortor.
                        </p>
                    </div>
                </section>


               
                <!--------------- Mobile start project section ----------------------->
                <section id="mobile-start-project">

                    <h1 class="">
                        <span>Start</span>
                        <span>Project</span>
                    </h1>
                    <div class="row mob-start-project-menu">
                        <div class="col-6 mob-start-project-menu1">
                            <ul>
                                <li>
                                    <a class="active-service" href="javascript:void(0)" onclick="mobProjectStartMenu(this)" type="m-ux">UI &UX</a>

                                </li>
                                <li>
                                    <a href="javascript:void(0)" onclick="mobProjectStartMenu(this)" type="m-dm">Digital Marketing</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onclick="mobProjectStartMenu(this)" type="m-wd">Web Development</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 mob-start-project-menu2">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" onclick="mobProjectStartMenu(this)" type="m-ai">AI & IoT Solutions</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onclick="mobProjectStartMenu(this)" type="m-ad">App Development</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="start-project-social-btn-group">
                        <div class="start-project-social-btn-group-first-row">
                          
                            <input type="checkbox" id="productDesign" name="productDesign" />
                            <label class="m-ux m-project-services" for="productDesign">Product Design</label>

                            <input type="checkbox" id="uxDesign" name="uxDesign" />
                            <label class="m-ux m-project-services" for="uxDesign">UX Design</label>


                            <input type="checkbox" id="userResearch" name="userResearch" />
                            <label class="m-ux m-project-services" for="userResearch">User Research & Analysis</label>

                            <input type="checkbox" id="customerJourney" name="customerJourney" />
                            <label class="m-ux m-project-services" for="customerJourney">Customer Journey Mapping</label>

                            <input type="checkbox" id="userExperience" name="userExperience" />
                            <label class="m-ux m-project-services" for="userExperience">User Experience Consulting</label>

                            <input type="checkbox" id="designThinking" name="designThinking" />
                            <label class="m-ux m-project-services" for="designThinking">Design Thinking</label>

                            <input type="checkbox" id="ecommerce" name="ecommerce" />
                            <label class="m-wd m-project-services" for="ecommerce">E-Commerce Web Development</label>

                            <input type="checkbox" id="java" name="java" />
                            <label class="m-wd m-project-services" for="java">Java Web Development</label>

                            <input type="checkbox" id="magneto" name="magneto" />
                            <label class="m-wd m-project-services" for="magneto">Magneto Web Development</label>

                            <input type="checkbox" id="drupal" name="drupal" />
                            <label class="m-wd m-project-services" for="drupal">Drupal Web Development</label>

                            <input type="checkbox" id="digitalMarketing" name="digitalMarketing" />
                            <label class="m-dm m-project-services" for="digitalMarketing">Digital Marketing</label>

                            <input type="checkbox" id="mediaMarketing" name="mediaMarketing" />
                            <label class="m-dm m-project-services" for="mediaMarketing">Social Media Marketing</label>

                            <input type="checkbox" id="appMarketing" name="appMarketing" />
                            <label class="m-dm m-project-services" for="appMarketing">App Marketing</label>

                            <input type="checkbox" id="googleAds" name="googleAds" />
                            <label class="m-dm m-project-services" for="googleAds">Google ADs</label>

                           
                           
                           
                            <input type="checkbox" id="native" name="native" />
                            <label class="m-app-d m-project-services" for="native">Native Mobile App Development</label>

                            <input type="checkbox" id="hybrid" name="hybrid" />
                            <label class="m-app-d m-project-services" for="hybrid">Hybrid Mobile App Development</label>

                            <input type="checkbox" id="progress" name="progress" />
                            <label class="m-app-d m-project-services" for="progress">Progressive Web App Development</label>

                            
                            
                            <input type="checkbox" id="smart" name="smart" />
                            <label class="m-ai m-project-services" for="smart">Smart Voice Assistant</label>

                            <input type="checkbox" id="aiChatbot" name="aiChatbot" />
                            <label class="m-ai m-project-services" for="aiChatbot">AI Chatbot</label>

                            <input type="checkbox" id="iot" name="iot" />
                            <label class="m-ai m-project-services" for="iot">IoT Based Alarm System</label>

                            <input type="checkbox" id="smartHome" name="smartHome" />
                            <label class="m-ai m-project-services" for="smartHome">Smart Home Controlling System</label>

                            <input type="checkbox" id="officeAssistant" name="officeAssistant" />
                            <label class="m-ai m-project-services" for="officeAssistant">AI Office Assistant</label>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <form class="start-project-form">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Phone" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="How can we help you" />
                                </div>
                                <button class="btn btn-secondary">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="start-project-info">
                        <div>+61405899496</div>
                        <div>info@quadque.tech</div>
                    </div>
                </section>

            <!--------------- Mobile blogs section ----------------------->
            <section id="mobile-blogs">

                <h1>Blogs</h1>

                <div class="mob-first-blog">
                        <img src="{{ asset('/assets/img/blogs/'.$blogs['firstBlogThumbnail']) }}" />


                        <a href="{{ url('/mobile/blog/details') }}" class="mob-blog-title" onclick="showBlogMobile(this)">{{ $blogs['firstBlogTitleMobile']}}</a>




                    <span class="mob-blog-date">{{ $blogs['firstBlogDate'] }}</span>

                </div>
                <div class="mob-second-blog">
                    <img src="{{ asset('/assets/img/blogs/'.$blogs['secondBlogThumbnail']) }}" />

                    <a href="{{ url('/mobile/blog/details') }}" class="mob-blog-title" onclick="showBlogMobile(this)">


                            {{$blogs['secondBlogTitleMobile']}}
                   </a>
                   <span class="mob-blog-date">{{ $blogs['secondBlogDate'] }}</span>

                         </div>
                    <div class="row">
                        <div class="col-6 mob-third-blog">
                            <img src="{{ asset('/assets/img/blogs/'.$blogs['thirdBlogThumbnail']) }}" />


                            <a href="{{ url('/mobile/blog/details') }}" class="mob-blog-title" onclick="showBlogMobile(this)">{{


                    $blogs['thirdBlogTitleMobile']}}</a>
                            <span class="mob-blog-date">{{ $blogs['thirdBlogDate'] }}</span>

                        </div>
                <div class="col-6 mob-fourth-blog">
                    <img src="{{ asset('/assets/img/blogs/'.$blogs['fourthBlogThumbnail']) }}" />

                    <a href=" {{ url('/mobile/blog/details') }}" style="text-decoration:none; display:inline-block" class="mob-blog-title">See More</a>

                </div>
               </div>
            </section>

             <!--------------- Mobile contact section ----------------------->
             <section id="mobile-contact">

                 <h1>Have a Good Web Designe Today</h1>
                 <div class="lets-talk">
                     <a href="#" class="btn btn-secondary">let's talk</a>
                 </div>
                 <div class="row">
                     <div class="col-6 mob-contact-product">
                         <h5>Product</h5>
                         <ul>
                             <li>Landing Page</li>
                             <li>Pricing</li>
                             <li><a href="{{ url('faq') }}">FAQ</a> </li>


                             <li><a href="{{ url('team') }}">Team</a> </li>

                         </ul>
                         <p>Level 1, 7 Greenfield Parade Bankstown, NSW 2200</p>
                         <p>
                             <img src="{{ asset('/assets/img/Vector.svg') }}" />

                             Quadque<br />
                             Technologies Pty Ltd<br />
                             LEVEL 1/7 Greenfield Parade,<br />
                             Bankstown NSW 2200
                         </p>
                     </div>
                     <div class="col-6 mob-contact-company">
                         <h5>Company</h5>
                         <ul>
                             <li><a href="#mobile-blogs">Blog</a></li>

                             <li><a href="#mobile-aboutus">About Us</a></li>

                             <li><a href="{{ url('gallery') }}">Gallery</a></li>
                             <li><a href="{{ url('/career') }}">Career</a></li>
                         </ul>
                         <p>+61405899496 info@quadque.tech</p>
                         <p>
                             <img src="{{ asset('/assets/img/Vector.svg') }}" />
                             Quadque<br />
                             Technologies Limited<br />
                             Level -7, 8/C, F.R Tower,<br />
                             Panthapath, Dhaka 1207
                         </p>
                     </div>
                 </div>
                 <div class="mob-social-icon">
                     <ul>
                         <li>
                             <a href="https://www.facebook.com/quadquetech/" target="_blank"><img src="{{ asset('/assets/img/facebook-current.svg') }}" /></a>

                         </li>
                         <li>
                             <a href="https://www.instagram.com/quadquetech/?hl=en" target="_blank"><img src="{{ asset('/assets/img/instagram-current.svg') }}" /></a>

                         </li>
                         <li>
                             <a href="https://twitter.com/quadquet?lang=en" target="_blank"><img src="{{ asset('/assets/img/twitter-current.svg') }}" /></a>

                         </li>
                         <li>
                             <a href="https://www.youtube.com/channel/UCXbnZTYKk6q82Hbux3ffILA/videos?view=0&sort=p" target="_blank"><img src="{{ asset('/assets/img/youtube-current.svg') }}" /></a>

                         </li>
                     </ul>
                 </div>
                 <div class="all-right">Quadque©2022, All rights reserved</div>
             </section>
    </div>


@endsection
