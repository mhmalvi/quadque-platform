@extends('user.layout.master')
@section('content')

  
   
   <!--------------- Mobile careers section ----------------------->

   @include('user.components.mobile-header')
   @include('user.components.menu')

        <section id="mobile-career">

            <h1>
                Current Job<br />
                Openings
            </h1>
            <div class="career-section">
                <div class="career-item">
                    <div class="career-img-box">
                        <img src="{{ asset('/assets/img/career-img-1.svg') }}" />

                    </div>
                    <div class="career-position">Creative Graphic Designer</div>
                    <div class="deadline"><span class="mr-1">Deadline </span>19.022021</div>

                </div>
                <div class="career-item">
                    <div class="career-img-box">
                        <img src="{{ asset('/assets/img/career-img-2.svg') }}" />

                    </div>
                    <div class="career-position">Creative Graphic Designer</div>
                    <div class="deadline"><span class="mr-1">Deadline </span>19.022021</div>

                </div>
            </div>
        </section>

@endsection