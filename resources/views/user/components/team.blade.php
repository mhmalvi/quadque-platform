@extends('user.layout.master')
@section('content')
  @include('user.components.mobile-header')
      <!--------------- Mobile team section ----------------------->

        <section id="mobile-team">

            <div class="mob-team-upper-content">
            
            
                <p>experience</p>
                <h1>
                    Skilled Team<br />
                    of creators
                </h1>
                <p><img src="/assets/img/team.svg" /></p>
                <p>
                    We are an experienced and diverse team of software engineers, mobile
                    application, Web developers, UI/UX designers, quality engineers,
                    digital marketing experts and business development/ analysts who work
                    closely to achieve the business goals. We love to solve complex
                    problems and always excited to turn ideas from whiteboard to reality.
                </p>
            </div>
            <div class="team-gallery" class="section">

                <div class="row">
                    <div class="col-6 team-col-1">
                        <div class="mb-2">

                            <img class="team-gallery-img" src="{{ asset('/assets/img/team-1.svg') }}" />

                        </div>
                        <div class="mb-2">

                            <img class="team-gallery-img" src="{{ asset('/assets/img/team-2.svg') }}" />


                        </div>
                    </div>
                    <div class="col-6 team-col-2">
                        <div class="mb-2">

                            <img class="team-gallery-img" src="{{ asset('/assets/img/team-3.svg') }}" />


                        </div>
                        <div class="mb-2">

                            <img class="team-gallery-img" src="{{ asset('/assets/img/team-4.svg') }}" />


                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection