@extends('user.layout.master')
@section('content')
      <!--------------- Mobile careers section ----------------------->
   @include('user.components.mobile-header')
   @include('user.components.menu')

        <section id="mobile-gallery">

            <div class="gallery-bg">
                <h1>Gallery</h1>
            </div>
            <div class="row gallery-section">
                <div class="col-6 gallery-first-col">
                    <div class="odd-item">
                        <img src="{{ asset('/assets/img/gallery-1.svg') }}" />

                    </div>
                    <div class="even-item">
                        <img src="{{ asset('/assets/img/gallery-3.svg') }}" />

                    </div>
                </div>
                <div class="col-6 gallery-second-col">
                    <div class="odd-item">
                        <img src="{{ asset('/assets/img/gallery-2.svg') }}" />

                    </div>
                    <div class="even-item">
                        <img src="{{ asset('/assets/img/gallery-4.svg') }}" />

                    </div>
                </div>
            </div>
        </section>


@endsection