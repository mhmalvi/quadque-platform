@extends('user.layout.master')
@section('content')

 <!--------------- Mobile Service Detail section ----------------------->
         @include('user.components.mobile-header')
         @include('user.components.menu')
        <section id="mobile-service-detail">
            <div class="mob-team-service-detail">
             
               
                <h1 class="serv-detail-header">UI/UX<br /></h1>
                <h2 class="sd-mobile-header">
                    Create Your Business with Digital Design
                </h2>
               
                <p class="serv-detail-text">
                    We are a team of professionals who are passionate about UI & UX design
                    with any visual solutions. We focus on creating the right UI & UX
                    design for your brand, designing for all taste palettes from Concept
                    to Final Product. We have a team of designers and online art
                    developers who are skilled in delivering high-quality, custom-made
                    designs and more identical graphics that get results.
                </p>
                <h3 class="serv-detail-strt-proj">START PROJECT</h3>
                <div class="image-container">
                    <img class="serv-detail-mob-svg" src="/assets/img/Sing-in-1.svg" />
                </div>
            </div>

            <div class="serv-details-section">
                <p class="serv-detail-text2">IDENTITY DESIGN SERVICES</p>
                <h1 class="serv-detail-header2">How We Can Help?<br /></h1>
                <p class="serv-detail-paragraph">
                    We’ll help you finding a solution and solve your problems. We use
                    process design to create digital products. Besides that also helps
                    their business.
                </p>
                <div class="row id-design-service-menu">
                    <div class="col-6 id-design-service-menu1">
                        <ul>
                            <li class="how-to-help">
                                <img src="{{ asset('assets/img/usability-analysis.svg') }}" />

                                <a href=""> Usability Analyst</a>
                            </li>
                            <li class="how-to-help">
                                <img src="{{ asset('assets/img/prod-design.svg') }}" />


                                <a href=""> Product Design</a>
                            </li>
                            <li class="how-to-help">
                                <img src="{{ asset('assets/img/vis-design.svg') }}" />


                                <a href=""> Visual Design</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 id-design-service-menu2">
                        <ul>
                            <li class="how-to-help">
                                <a href="">User Research</a><img src="{{ asset('assets/img/usr-research.svg') }}" />


                            </li>
                            <li class="how-to-help">
                                <a href="">Web/App Design</a><img src="{{ asset('assets/img/web-design.svg') }}" />


                            </li>
                            <li class="how-to-help">
                                <a href="">Interaction Design</a><img src="{{ asset('assets/img/int-design.svg') }}" />


                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row proj-client-number-menu">
                    <div class="col-5 proj-number-menu1">
                        <ul>
                            <li>
                                <a class="project-number" href=""> 180+</a>
                            </li>
                            <li>
                                <a class="project-completed" href=""> Projects Completed</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-1">
                        <img src="{{ asset('assets/img/divider.svg') }}" alt="" />


                    </div>
                    <div class="col-5 client-number-menu2">
                        <ul>
                            <li>
                                <a class="client-number" href=""> 124+</a>
                            </li>
                            <li>
                                <a href=""> Happy Clients</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <p class="serv-detail-text2">BEST FOR YOU</p>
                <h1 class="serv-detail-header2">We serve the best service<br /></h1>
                <div class="row best-services-menu">
                    <div class="col-4 best-services-menu1">
                        <ul>
                            <li>
                                <a href=""><img src="{{ asset('assets/img/img-11.png') }}" /></a>


                            </li>
                        </ul>
                    </div>
                    <div class="col-8 best-services-menu2 mt-3">
                        <ul>
                            <li>
                                <a class="best-service-title" href="">
                                    Create A Strong Impression</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a class="best-service-paragraph">
                    A logo serves as a company's first touchpoint with consumers. If
                    created well, it may spark the public's attention and encourage them
                    to discover more about the company.
                </a>

                <div class="row best-services2-menu">
                    <div class="col-4 best-services2-menu1">
                        <ul>
                            <li>
                                <a href=""><img src="{{ asset('assets/img/img-22.png') }}" /></a>


                            </li>
                        </ul>
                    </div>
                    <div class="col-8 best-services2-menu2 mt-3">
                        <ul>
                            <li>
                                <a class="best-service2-title" href="">
                                    Builds the Foundation</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a class="best-service2-paragraph">
                    Branding is about influencing customers' emotions. It's all about the
                    story you're attempting to tell, and your identity design sets the
                    setting for it.
                </a>

                <div class="row best-services3-menu">
                    <div class="col-4 best-services3-menu1">
                        <ul>
                            <li>
                                <a href=""><img src="{{ asset('assets/img/img-33.png') }}" /></a>


                            </li>
                        </ul>
                    </div>
                    <div class="col-8 best-services3-menu2 mt-3">
                        <ul>
                            <li>
                                <a class="best-service3-title" href="">
                                    It Fosters Brand Loyalty</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a class="best-service3-paragraph">
                    As your brand expands, people will get more familiar with your
                    identity, creating the notion that you are trustworthy and
                    approachable.
                </a>

                <div class="row best-services4-menu">
                    <div class="col-4 best-services4-menu1">
                        <ul>
                            <li>
                                <a href=""><img src="{{ asset('assets/img/img-44.png') }}" /></a>


                            </li>
                        </ul>
                    </div>
                    <div class="col-8 best-services4-menu2 mt-3">
                        <ul>
                            <li>
                                <a class="best-service4-title" href=""> Rememberable </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a class="best-service4-paragraph">
                    People remember your company by your attractive identity design. So,
                    this is very important to keep your company memorable.
                </a>
                <br />
                <p class="serv-detail-text2">WHY YOU CHOOSE US</p>
                <h1 class="serv-detail-header2">
                    Our Designers Paint Your Identity<br />
                </h1>
                <div class="designer-image-container">
                    <img class="designer-image" src="{{ asset('assets/img/img-90.png') }}" />


                </div>
                <p class="best-service-paragraph2">
                    We develop some of the most visually beautiful and eye-catching
                    designs, and our optimized designs significantly improve the quality
                    of the user experience. <br /><br />
                    We do great deal in design under a budgeted price to give best
                    experience for the users on the web and mobile platforms
                </p>
                <br />
                <br />
                <h1 class="serv-detail-header2">
                    OUR UI AND UX DESIGN SERVICES AND CAPABILITIES<br />
                </h1>
                <p class="best-service-paragraph2">
                    When you choose our services, you get everything to realise your
                    product idea properly, from the experience of working.
                </p>
                <div class="design-service-box">
                    <h1 class="design-service-boxtext">AR Experience Design</h1>
                </div>
                <div class="design-service-box">
                    <h1 class="design-service-boxtext">
                        Mobile app UX and UI Design Service
                    </h1>
                </div>
                <div class="design-service-box">
                    <h1 class="design-service-boxtext">
                        Cross-Platform Experience Design
                    </h1>
                </div>
                <div class="design-service-box">
                    <h1 class="design-service-boxtext">UI and UX Consulting</h1>
                </div>
                <div class="design-service-box">
                    <h1 class="design-service-boxtext">Design Workshops</h1>
                </div>
                <div class="design-service-box">
                    <h1 class="design-service-boxtext">Web Design Service</h1>
                </div>
                <br />
                <br />
                <h1 class="serv-detail-header2">
                    HOW WE DELIVER UI AND UX SERVICES<br />
                </h1>
                <p class="best-service-paragraph2">
                    A decade in design has allowed our team to perfect the process of
                    delivering UI and UX services. We follow established design standards,
                    workflows, and guidelines — you get the product you need, delivered by
                    expert designers within the set timeframe.
                </p>
                <br />
                <h1 class="serv-detail-header2">OUR LATEST WORK<br /></h1>
                <br />
                <img class="latestwork-image-container" src="{{ asset('assets/img/img-91.png') }}" />


                <h1 class="latestwork-image-name">OTOBI Bd lagest furniture Shop</h1>
                <br />
                <br />
                <h1 class="serv-detail-header2">People Talk About Us<br /></h1>
                <br />
                <div class="people-reviews-box">
                    <img class="reviews-image-container" src="{{ asset('assets/img/img-92.png') }}" />


                    <h1 class="people-reviews-boxtext">
                        A software development company in Dhaka. They also work related to
                        AI, IOT, Digital Marketing services.
                    </h1>
                    <h1 class="people-reviews-name">Md Antor Ahmed</h1>
                </div>
            </div>
        </section>
@endsection