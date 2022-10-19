@extends('user.layout.master')
@section('content')

<!--------------- Mobile Service Detail section ----------------------->
@include('user.components.mobile-header')
@include('user.components.menu')
<section id="mobile-service-detail">
    <div class="mob-team-service-detail">

        <p class="serv-detail-text">
            We are a team of professionals who are passionate about UI & UX design
            with any visual solutions. We focus on creating the right UI & UX
            design for your brand.
           
        </p>
        <div class="image-container">
            <img class="serv-detail-mob-svg" src="{{ asset('assets/img/blogs/1661943817.jpg') }}" />

        </div>
    </div>

    <div class="serv-details-section">
      
        <a class="best-service-paragraph">
            A logo serves as a company's first touchpoint with consumers. If
            created well, it may spark the public's attention and encourage them
            to discover more about the company.
        </a>

      
        <a class="best-service2-paragraph">
            Branding is about influencing customers' emotions. It's all about the
            story you're attempting to tell, and your identity design sets the
            setting for it.
        </a>

        <div class="row best-services3-menu">
           
           
        </div>
        <a class="best-service3-paragraph">
            As your brand expands, people will get more familiar with your
            identity, creating the notion that you are trustworthy and
            approachable.
        </a>

       
        <a class="best-service4-paragraph">
            People remember your company by your attractive identity design. So,
            this is very important to keep your company memorable.
        </a>
        <br />
        <p class="serv-detail-text2">WHY YOU CHOOSE US</p>
        <h1 class="serv-detail-header2">
            Our Designers Paint Your Identity<br />
        </h1>
       
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
      
        <p class="best-service-paragraph2">
            A decade in design has allowed our team to perfect the process of
            delivering UI and UX services. We follow established design standards,
            workflows, and guidelines — you get the product you need, delivered by
            expert designers within the set timeframe.
        </p>
 
      
    </div>
</section>
@endsection
