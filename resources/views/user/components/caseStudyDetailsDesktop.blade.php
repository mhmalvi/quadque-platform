{{-- @extends('user.layout.master')
@section('content')
 --}}
 <!doctype html>
 <html lang="en">
 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
   <link href="{{ asset('assets/css/casestudy-details.css')}}" type="text/css" rel="stylesheet" />
     <title>Case Study Details</title>
 </head>
 <body>

 <div class="container-fluid">
<div class="desktop-casestudy-details">

    <section class="main-wrapper">
        <div class="row d-flex justify-content-start">
            <p style="font-size:15px">AUGUST 12, 2022</p>
        </div>
      
            <div class="mob-team-service-detail">


                <h1 class="serv-detail-header">UI/UX<br /></h1>
                <h5 class="sd-mobile-header">
                    Create Your Business with Digital Design
                </h5>

                <p class="serv-detail-text" style="width:40%">
                    We are a team of professionals who are passionate about UI & UX design
                    with any visual solutions. We focus on creating the right UI & UX
                    design for your brand, designing for all taste palettes from Concept
                    to Final Product. We have a team of designers and online art
                    developers who are skilled in delivering high-quality, custom-made
                    designs and more identical graphics that get results.
                </p>
                <h5 class="serv-detail-strt-proj">START PROJECT</h5>
               {{--  <div class="image-container" style="margin: 10% 0;">

                    <img class="serv-detail-mob-svg" src="/assets/img/Sing-in-1.svg" style="    display: b list-item;
    display: block;
    text-align: center;
    margin: 0 auto;
    width: 350px;" />

                </div> --}}
            </div>

  

        <h5 class="py-1">Insights about my personal and
            work life, and the in-betweens</h5>

        <div class="my-2">
            <img src="{{ asset('assets/img/space.svg') }}" style="width:100%; height:500px">
        </div>
        <p class="my-5" style="font-size:15px; text-align:justify">

            We are a team of professionals who are passionate about UI & UX design
            with any visual solutions. We focus on creating the right UI & UX
            design for your brand.
            A logo serves as a company's first touchpoint with consumers. If
            created well, it may spark the public's attention and encourage them
            to discover more about the company.
            Branding is about influencing customers' emotions. It's all about the
            story you're attempting to tell, and your identity design sets the
            setting for it.
            Branding is about influencing customers' emotions. It's all about the
            story you're attempting to tell, and your identity design sets the
            setting for it.


        </p>
        <div class="image-container my-2">
            <img class="serv-detail-mob-svg" src="{{ asset('assets/img/space-2.jpg') }}" style="width:100%; height:500px" />

        </div>
        <p class="my-2 mt-5" style="width:100%; text-align:justify">


            A logo serves as a company's first touchpoint with consumers. If
            created well, it may spark the public's attention and encourage them
            to discover more about the company.
            Branding is about influencing customers' emotions. It's all about the
            story you're attempting to tell, and your identity design sets the
            setting for it.
            Branding is about influencing customers' emotions. It's all about the
            story you're attempting to tell, and your identity design sets the
            setting for it.


        </p>
        <P class="my-2">
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
            As your brand expands, people will get more familiar with your
            identity, creating the notion that you are trustworthy and
            approachable. People remember your company by your attractive identity design. So,
            this is very important to keep your company memorable.We develop some of the most visually beautiful and eye-catching
            designs, and our optimized designs significantly improve the quality
            of the user experience.

        </P>
        <P class="my-2" style="width:100%; text-align:justify">

            As your brand expands, people will get more familiar with your
            identity, creating the notion that you are trustworthy and
            approachable. People remember your company by your attractive identity design. So,
            this is very important to keep your company memorable.We develop some of the most visually beautiful and eye-catching
            designs, and our optimized designs significantly improve the quality
            of the user experience.
            We do great deal in design under a budgeted price to give best
            experience for the users on the web and mobile platforms
            When you choose our services, you get everything to realise your
            product idea properly, from the experience of working. A decade in design has allowed our team to perfect the process of
            delivering UI and UX services. We follow established design standards,
            workflows, and guidelines — you get the product you need, delivered by
            expert designers within the set timeframe.
        </P>

             <div class="row">
                    <div class="other-blog">
                        <div class="other-blog-title" style="width:100%">Other interesting posts</div>
                    </div>
                    <div class="other-blog-inner-section">
                        @isset($blogs)
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
                                    @endisset 

                   </div>

             <div class="see-more">
                 <a href="javascript:void(0)" onclick="seeMoreBlog()">See More</a>
             </div>
         </div>
           


    </section>
</div>

 </div>

 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    
 </body>
 </html>

      
{{-- @endsection
 --}}