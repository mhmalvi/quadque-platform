@extends('user.layout.master')
@section('content')

 <div class="main-content" >

    <!-- Desktop and Laptop version-->

    <!-- menu  -->
    <div id="menu">
        <div class="logo">
            <img src="{{ asset('assets/img/logo.png') }}" />

        </div>
        <div class="cancel-button">
            <img class="cancel-menu" onclick="hideMenu()" src="{{ asset('assets/img/cancel-button.png') }}" />

        </div>
        <div class="service">
            <a href="#category" onclick="hideMenu()" onmouseover="showMenuText('Service')" onmouseleave="hideMenuText()">
                service
            </a>
        </div>
        <div class="about">
            <a href="#about" onclick="hideMenu()" onmouseenter="showMenuText('About')" onmouseleave="hideMenuText()">about</a>
        </div>
        <div class="portfolio">
            <a href="#caseStudy" onclick="hideMenu()" onmouseenter="showMenuText('Portfolio')" onmouseleave="hideMenuText()">portfolio</a>
        </div>
        <div class="blogs">
            <a href="#blog" onclick="hideMenu()" onmouseenter="showMenuText('Blogs')" onmouseleave="hideMenuText()">blogs</a>
        </div>
        <div class="contact">
            <a href="#contact" onclick="hideMenu()" onmouseenter="showMenuText('Contact')" onmouseleave="hideMenuText()">contact</a>
        </div>
            <div class="showMenuText"></div>
        </div>
        <!-- end menu -->
        <!-- blog-details  -->
        <div id="blog-details">
       
        <div class="row row mt-5">

            <div class="date">
                <span>Tutorials </span><span class="blogDate"></span>

            </div>
            <div class="blog-button">
                <img class="cancel-menu cancel-blog-details" src="{{ asset('assets/img/cancel-button.png') }}" />

            </div>
        </div>

        <div class="row">
            <div class="blog-content">
                <div class="blog-title">
                 
                </div>
                <div class="blog-text"></div>
                <div class="bottom-border"></div>
            </div>
        </div>
        <div class="row">
            <div class="other-blog">
                <div class="other-blog-title">Other interesting posts</div>
            </div>
            <div class="other-blog-inner-section">
                  {{--    @isset($blog)

                                @foreach($blogs as $blog)
                                        <div class="other-blog-section">
                                            <div class="other-blog-content d-flex justify-content-between">
                                                <div class="other-blog-text">
                                                    <p class="other-blog-date">
                                                        <span style="margin-right: 15px">weekly update </span><span>{{ date('d-m-Y', strtotime($blog->created_at)) }}</span>
                                                    </p>
                                                    <p class="other-blog-title" onclick="showBlog({{ $blog->id }})">
                                                        {{ substr($blog->title, 100)}}
                                                    </p>
                                                    <p class="other-blog-details">
                                                        {{ substr($blog->title, 150)}}

                                                    </p>
                                                </div>
                                                <div class="other-blog-image">
                                                    <img class="cancel-menu" src=" {{ asset('/assets/img/blogs/'.$blog->thumbnail) }}" />
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                     @endisset --}}

            </div>
           
            <div class="see-more">
                <a href="javascript:void(0)" onclick="seeMoreBlog()">See More</a>
            </div>
            </div>
        </div>
        <!-- end menu -->
        <div id="fullpage">

            <section id="home" class="section d-none d-xl-block" >
                <video class="background-video d-none d-xl-block" autoplay loop muted>
                    <source src="{{ asset('/assets/bg-video/header-video-3.mp4') }}" type="video/mp4" />
                </video>
                <div class="video-text">
                <h1 class="animate-typing" data-type-speed="200" data-remove-speed="100" data-remove-delay="500" data-animate-loop="true">Innovate Connect Transform </h1>



                    <a href="#contact">contact us<img :src="'assets/img/contact-icon.png'" /></a>
                </div>
            </section>
            <section id="category" class="section d-none d-xl-block">

                <div class="category-content">
                    <div class="category-content-body">
                        <div class="ping-row">
                            <div>
                                <a class="ping d-inline-block" href="#startProject"></a>
                            </div>
                        </div>
                        <div class="category-bg"></div>

                        <div class="category-image">
                            <img src="{{ asset('images/06_gfx.png') }}">
                        </div>

                        <h1 class="category-heading">ui/ux</h1>

                        <p class="category-details">

                           Outstanding visuals and aesthetic designs to take your brand to the next level.

                        </p>
                        <div class="project-btn">
                            <button type="button">start project</button>
                        </div>
                        <div class="project-menu-list">
                            <ul>
                                <li>
                                    <a href="#" onclick="changeCategory(this)" type="ui" id="ui_category" class="category_list_active">UI & UX</a>

                                </li>
                                <li>
                                    <a href="#" onclick="changeCategory(this)" type="web" id="web_category">Web Development</a>
                                </li>
                                <li>
                                    <a href="#" onclick="changeCategory(this)" type="dm" id="dm_category">Digital Marketing</a>
                                </li>
                                <li>
                                    <a href="#" onclick="changeCategory(this)" type="ad" id="ad_category">App Development</a>
                                </li>
                                <li>
                                    <a href="#" onclick="changeCategory(this)" type="ai" id="ai_category">AI & IOT Solutions</a>
                                </li>
                                <li>
                                    <a href="#" onclick="changeCategory(this)" type="sd" id="sd_category">Software Development</a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section id="customer" class="section d-none d-xl-block">
                <div class="customer-content">
                    <div class="customer-content-body">
                        <div class="ping-row">
                            <div>
                                <a class="ping d-inline-block" href="#startProject"></a>
                            </div>
                        </div>
                        <div class="customers-text">
                            <h1>
                                More then valuable <span class="cus-num">100</span> coustomers
                            </h1>
                            <p>
                                We create premium web design, though and user-friendly that solve
                                business problems We create premium web design.
                            </p>
                        </div>
                        <dynamic-marquee class="customers-icon-group-one">
                            <div>
                                <div class="icon-box">
                                    <img src="{{asset('assets/img/microsoft.png')}}" />
                                </div>
                                <div class="icon-box">
                                    <img src="{{asset('assets/img/tesla.png')}}" />
                                </div>
                                <div class="icon-box">
                                    <img src="{{asset('assets/img/microsoft.png')}}" />
                                </div>
                                <div class="icon-box">
                                    <img src="{{asset('assets/img/tesla.png')}}" />
                                </div>
                                <div class="icon-box">
                                    <img src="{{asset('assets/img/microsoft.png')}}" />
                                </div>
                            </div>
                        </dynamic-marquee>
                        <dynamic-marquee class="customers-icon-group-two" :reverse="true">
                            <div>
                                <div class="icon-box">
                                    <img src="{{asset('assets/img/spotify.png')}}" />
                                </div>
                                <div class="icon-box">
                                    <img src="{{asset('assets/img/google.png')}}" />
                                </div>
                                <div class="icon-box">
                                    <img src="{{asset('assets/img/spotify.png')}}" />
                                </div>
                                <div class="icon-box">
                                    <img src="{{asset('assets/img/google.png')}}" />
                                </div>
                                <div class="icon-box">
                                    <img src="{{asset('assets/img/spotify.png')}}" />
                                </div>
                            </div>
                        </dynamic-marquee>

                        <dynamic-marquee class="customers-icon-group-three">
                            <div>
                                <div class="icon-box">
                                    <img src="{{asset('assets/img/yassir.png')}}" />
                                </div>
                                <div class="icon-box">
                                    <img src="{{asset('assets/img/tiktok.png')}}" />
                                </div>
                                <div class="icon-box">
                                    <img src="{{asset('assets/img/yassir.png')}}" />
                                </div>
                                <div class="icon-box">
                                    <img src="{{asset('assets/img/tiktok.png')}}" />
                                </div>
                                <div class="icon-box">
                                    <img src="{{asset('assets/img/yassir.png')}}" />
                                </div>
                            </div>
                        </dynamic-marquee>
                    </div>
                </div>
            </section>
            <section id="about" class="section d-none d-xl-block">
                <div class="about-content">
                    <div class="about-content-body">
                        <div class="ping-row">
                            <div>
                                <a class="ping d-inline-block" href="#startProject"></a>
                            </div>
                        </div>
                        <div class="first-section-bg"></div>
                        <div class="first-section-gradient"></div>
                        <div class="about-section">
                            <h1>About us</h1>
                            <div class="about-text">
                                <h2>OUR VISION </h2>

                                <p>
                                   To be among the top-notch tech companies in the world.

                                </p>
                                <span class="about-bar"></span>
                            </div>
                            <div class="about-text">
                                <h2>OUR MISSION </h2>

                                <p>
                                   To deliver innovative and reliable technological solutions with maximum accuracy.

                                </p>
                                <span class="about-bar"></span>
                            </div>
                            <div class="about-text">
                                <h2>OUR GOAL </h2>

                                <p>
                                    To define a new dimension of quality using advanced technological solutions.

                                </p>
                                <span class="about-bar"></span>
                            </div>
                            <div class="about-text">
                                <h2>OUR OBJECTIVE </h2>

                                <p>
                                  To achieve each and every client’s satisfaction.

                                </p>
                                <span class="about-bar"></span>
                            </div>
                            <div class="about-text">
                                <h2>WHO WE ARE </h2>

                                <p>
                                   Quadque is the best digital partner for ingenious web services and digital marketing solutions. We are working with the world’s leading enterprises and SMEs to address their technological obstacles. We help many businesses elevate their valuations through custom software development, identity design, digital marketing services, AI applications and IOT tools.

                                </p>
                                <span class="about-bar"></span>
                            </div>
                            <div class="about-text">
                                <h2>WHY CHOOSE US </h2>

                                <p>
                                   Our worldwide team of professionals possesses the right combination of talents and expertise for your technical needs. We have experienced software engineers, web developers, and digital marketing specialists. Our team is dedicated to providing the best services.

                                   <b>50+ Happy Customers</b>


                                   We transform our clients' businesses in the major industry sectors with adaptable, innovative, powerful and value-based digital solutions that satisfy modern needs.

                                </p>
                                <span class="about-bar"></span>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
            <section id="caseStudy" class="section d-none d-xl-block">
                <div class="case-study-content">
                    <div class="case-study-content-body">
                        <div class="ping-row">
                            <div>
                                <a class="ping d-inline-block" href="#startProject"></a>
                            </div>
                        </div>
                        <div class="case-study-main-content">
                            <div class="row row-1">
                                <div class="case-study-text">
                                    <h1>Case study</h1>
                                    <p>We create premium web design, though and user</p>
                                </div>
                                <div class="first-casestudy-section">
                                    <div class="first-casestudy-section-content">
                                        <ul class="first-casestudy-section-content-list">

                                            @isset($caseStudyFirstRows)
                                                    
                                                    @foreach($caseStudyFirstRows as $caseStudyFirstRow)

                                                        <li>
                                                            <div class="case-study-box dji">
                                                                <div class="case-study-img">
                                                                <a href="{{ url('desktop/casestudy/details') }}">
    
                                                                        <img src="{{ asset('/assets/img/case_study/'.$caseStudyFirstRow->com_image) }} " />

                                                                </a>
                                                                </div>
                                                                <div class="case-study-text">
                                                                    {{ $caseStudyFirstRow->com_name }}
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                            @endisset
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-2 d-flex justify-content-end">
                                <div class="second-casestudy-section">
                                    <div class="second-casestudy-section-content">
                                        <ul class="second-casestudy-section-content-list">

                                            @isset($caseStudySecondRows)
                                            @foreach($caseStudySecondRows as $caseStudySecondRow)
                                                <li>
                                                    <div class="case-study-box dji">
                                                        <div class="case-study-img">
                                                         <a href="{{ url('desktop/casestudy/details') }}">
                                                                <img src="{{ asset('/assets/img/case_study/'.$caseStudySecondRow->com_image) }}" />

                                                         </a>
                                                        </div>
                                                        <div class="case-study-text">
                                                            {{ $caseStudySecondRow->com_name }}
                                                        </div>
                                                    </div>
                                                </li>

                                            @endforeach
                                                
                                            @endisset
                                        
                                        </ul>
                                    </div>
                                </div>
                                <div class="more-company" onclick="moreUserCase()"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="testimonial" class="section d-none d-xl-block">
                <div class="testimonials-content">
                    <div class="testimonials-content-body">
                        <div class="ping-row">
                            <div>
                                <a class="ping d-inline-block" href="#startProject"></a>
                            </div>
                        </div>

                        <div class="first-section">
                            <div class="quotation-img">
                                <img :src="'assets/img/quatation.png'" />
                                <h1>Our clients speak</h1>
                            </div>
                            <div class="client-img">
                                <img src="{{ asset('assets/img/testimonial.png') }}" />

                            </div>
                        </div>
                        <div class="second-section">
                            <P class="client-review">
                               "We are extremely pleased with our company's website development. The superb features of the website have given us an amazing number of online visitors. Additionally, the exceptional web design by Quadque Technologies Ltd. helped us stand out among the competitors. Overall, their help has brought us remarkable success in our industry."

                            </P>
                            <p class="client-name">-Team CLEANOVATIVE</p>

                            <p class="client-designation">CLEANOVATIVE</p>

                            <div class="pagination">
                                <span class="prev">Prev</span><span class="pagination-arrow"></span><span class="next">Next</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="media" class="section d-none d-xl-block">
                <div class="media-content">
                    <div class="media-content-body">
                        <div class="media-bg">
                            <h1>our media buying</h1>
                            <div class="media-img">
                                  <canvas id="myChart"></canvas>

                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing tempor. Risus
                                ultricies tristique...
                            </p>
                            <div class="project-btn">
                                <button type="button">start project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="blog" class="section d-none d-xl-block">
                <div class="work-content">
                    <div class="work-content-body">
                        <div class="first-section">
                            <div class="first-section-title" onclick="showBlog({{  $blogs['firstBlogId'] ?  $blogs['firstBlogId']: ''  }})">



                                {{ $blogs['firstBlogTitle'] ? $blogs['firstBlogTitle']:''}}




                            </div>
                            <div class="profile">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/img/thumbnail/thumbnail.png') }}" />

                                </div>
                                <div class="profile-name">
                                    <span>By Admin </span>
                                    <span style="color: #8f00ff"> in </span><span style="color: #8b8b8b"> Random Category</span>
                                </div>
                                <div class="published-date">{{ $blogs['firstBlogDate'] ? $blogs['firstBlogDate']: '' }}</div>


                            </div>
                        </div>
                        <div class="second-section">
                            <div class="second-section-title" onclick="showBlog({{ $blogs['secondBlogId'] ? $blogs['secondBlogId'] :'' }})">



                                {{ $blogs['secondBlogTitle'] ? $blogs['secondBlogTitle'] : '' }}


                            </div>
                        </div>
                        <div class="third-section">
                            <div class="third-section-title" onclick="showBlog({{ $blogs['thirdBlogId'] ?  $blogs['thirdBlogId'] : ''}})">



                                {{ $blogs['thirdBlogTitle'] ? $blogs['thirdBlogTitle']:'' }}


                            </div>
                        </div>
                        <div class="fourth-section">
                            <div class="fourth-section-title" onclick="showBlog({{ $blogs['fourthBlogId'] ? $blogs['fourthBlogId'] : '' }})">



                                {{ $blogs['fourthBlogTitle'] ?$blogs['fourthBlogTitle'] : '' }}


                            </div>
                            <div class="read-more">
                                <button class="btn btn-secondary" onclick="seeMoreBlog()">
                                    Read More
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
            <section id="startProject" class="section d-none d-xl-block">
                <div class="project-content">
                    <div class="project-content-body">
                        <div class="ping-row">
                            <div>
                                <a class="ping d-inline-block" href="#startProject"></a>
                            </div>
                        </div>
                        <div class="content-area">
                            <div class="header">
                                <h1>
                                    <span>start</span>
                                    <span style="margin-left: 3rem">project</span>
                                </h1>
                            </div>
                            <div class="mobile-num">
                                <p>Call us +61405899496</p>
                            </div>
                             <div class="project-menu-list">
                                 <ul class="start-project-list">
                                     <li>
                                         <a href="#" class="project-menu-list-active" onclick="changeProject(this)" type="ux">UI & UX</a>
                                     </li>
                                     <li>
                                         <a href="#" onclick="changeProject(this)" type="web">Web Development</a>
                                     </li>
                                     <li>
                                         <a href="#" onclick="changeProject(this)" type="dm">Digital Marketing</a>
                                     </li>
                                     <li>
                                         <a href="#" onclick="changeProject(this)" type="ad">App Development</a>
                                     </li>
                                     <li>
                                         <a href="#" onclick="changeProject(this)" type="ai">AI & IOT Solutions</a>
                                     </li>
                                  
                                 </ul>
                             </div>
                             <form>
                                 <div class="social-media">
                                     <div class="dm project-services">
                                         <input type="checkbox" id="digital-marketing" />
                                         <label for="digital-marketing">Digital Marketing</label>
                                     </div>
                                     <div class="dm project-services">
                                         <input type="checkbox" id="social-media-marketing" />
                                         <label for="social-media-marketing">Social Media Marketing</label>
                                     </div>
                                     <div class="dm project-services">
                                         <input type="checkbox" id="specific-apps-marketing" />
                                         <label for="specific-apps-marketing">Specific Apps Marketing</label>
                                     </div>
                                     <div class="dm project-services">
                                         <input type="checkbox" id="ads" />
                                         <label for="ads">Google ADs</label>
                                     </div>
                                     <div class="web project-services">
                                         <input type="checkbox" id="e-commerce" />
                                         <label for="e-commerce">E-commerce Web Development </label>

                                     </div>
                                     <div class="web project-services">
                                         <input type="checkbox" id="crm" />
                                         <label for="crm">Java Web Development</label>

                                     </div>
                                     <div class="web project-services">
                                         <input type="checkbox" id="erp" />
                                         <label for="erp">Magento Web Development </label>

                                     </div>
                                     <div class="web project-services">
                                         <input type="checkbox" id="pos" />
                                         <label for="pos">Drupal Web Development </label>

                                     </div>
                                     <div class="ux project-services">
                                         <input type="checkbox" id="product_design" />
                                         <label for="product_design">Product Design</label>
                                     </div>
                                     <div class="ux project-services">
                                         <input type="checkbox" id="ux_design" />
                                         <label for="ux_design">UX Design</label>
                                     </div>
                                     <div class="ux project-services">
                                         <input type="checkbox" id="user_research" />
                                         <label for="user_research">User Research & Analysis</label>
                                     </div>
                                     <div class="ux project-services">
                                         <input type="checkbox" id="customer_journey" />
                                         <label for="customer_journey">Customer Journey Mapping</label>
                                     </div>
                                     <div class="ux project-services">
                                         <input type="checkbox" id="ui_interaction" />
                                         <label for="ui_interaction">User Experience Consulting</label>
                                     </div>
                                     <div class="ux project-services">
                                         <input type="checkbox" id="design_thinking" />
                                         <label for="design_thinking">Design Thinking</label>
                                     </div>
                                     <div class="ai project-services">
                                         <input type="checkbox" id="smart_voice" />
                                         <label for="smart_voice">Smart Voice Assistant </label>
                                     </div>
                                     <div class="ai project-services">
                                         <input type="checkbox" id="ai_chatbot" />
                                         <label for="ai_chatbot">AI Chatbot </label>
                                     </div>
                                     <div class="ai project-services">
                                         <input type="checkbox" id="alarm_system" />
                                         <label for="alarm_system">IoT Based Alarm System </label>
                                     </div>
                                     <div class="ai project-services">
                                         <input type="checkbox" id="smart_home" />
                                         <label for="smart_home">Smart Home Controlling System </label>
                                     </div>
                                     <div class="ai project-services">
                                         <input type="checkbox" id="office_assistant" />
                                         <label for="office_assistant">AI Office Assistant </label>
                                     </div>
                                     <div class="ad project-services">
                                         <input type="checkbox" id="native_mobile" />
                                         <label for="native_mobile">Native Mobile App Development </label>
                                     </div>
                                     <div class="ad project-services">
                                         <input type="checkbox" id="hybrid_mobile" />
                                         <label for="hybrid_mobile">Hybrid Mobile App Development </label>
                                     </div>
                                     <div class="ad project-services">
                                         <input type="checkbox" id="web_app" />
                                         <label for="web_app">Progressive Web App Development </label>

                                     </div>
                                 </div>
                                 <div class="contact-form">
                                     <div>
                                         <input type="text" placeholder="name" />
                                     </div>
                                     <div>
                                         <input type="text" placeholder="phone" />
                                     </div>
                                     <div>
                                         <input type="text" placeholder="E-mail" />
                                     </div>
                                     <div>
                                         <input type="text" placeholder="How can we help you" />
                                     </div>
                                     <div class="project-btn">
                                         <button type="button">start project</button>
                                     </div>
                                 </div>
                             </form>

                            <div class="spaceman" style="background-image:url('{{ asset('images/spaceman.png') }}')"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact" class="section d-none d-xl-block">
                <div class="contact-content">
                    <div class="contact-content-body">
                        <div class="logo">
                            <img id="quadque_logo" rotate='0' src="{{ asset('assets/img/contact-bg-icon.svg') }}" />
                        </div>
                        <h1>Have a Good Web Designe Today</h1>
                        <div class="talk-btn">
                            <a href="#" class="btn btn-secondary">let's talk</a>
                        </div>

                        <div class="text">
                            <p>
                                High level experience in web design and development knowledge,
                                producing quality work.
                            </p>
                        </div>
                        <div class="social-icon">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/quadquetech" target="_blank">
                                        <font-awesome-icon icon="fa-brands fa-facebook-f" /></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCXbnZTYKk6q82Hbux3ffILA" target="_blank">
                                        <font-awesome-icon icon="fa-brands fa-youtube" /></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/quadquetech/?hl=en" target="_blank">
                                        <font-awesome-icon icon="fa-brands fa-instagram" /></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/QuadqueT" target="_blank">
                                        <font-awesome-icon icon="fa-brands fa-twitter" /></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product">
                            <h4>product</h4>
                            <ul>
                                <li>landing page</li>
                                <li>popup builder</li>
                                <li>web-design</li>
                                <li>content</li>
                                <li>integration</li>
                            </ul>
                        </div>
                        <div class="usecase">
                            <h4>use cases</h4>
                            <ul>
                                <li>web-designers</li>
                                <li>marketers</li>
                                <li>small business</li>
                                <li>website builder</li>
                            </ul>
                        </div>
                        <div class="resources">
                            <h4>resources</h4>
                            <ul>
                                <li>academy</li>
                                <li>blog</li>
                                <li>themes</li>
                                <li>hosting</li>
                                <li>developers</li>
                                <li>support</li>
                            </ul>
                        </div>
                        <div class="company">
                            <h4>company</h4>
                            <ul>
                                <li><a href="#about">about us</a></li>
                                <li><a href="#">careers</a></li>
                                <li><a href="#">faqs</a></li>
                                <li><a href="#">teams</a></li>
                                <li><a href="#contact">contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
        </div>
 @endsection
