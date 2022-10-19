@extends('user.layout.master')
@section('content')



<!--------------- Mobile careers section ----------------------->

@include('user.components.mobile-header')
@include('user.components.menu')

    <!--------------- Mobile faq section ----------------------->

        <section id="faq">

            <h1>FAQ's</h1>
            <div class="faq-img">
                <img src="{{ asset('/assets/img/faqs.svg') }}" />

            </div>
            <p>Most Popular Questions</p>
            <ul>
                <li>
                    <img src="{{ asset('assets/img/faqs-icon.svg') }}" /><span>Will you maintain my site for me?</span>

                </li>
                <li>
                    <img src="{{ asset('/assets/img/faqs-icon.svg') }}" /><span>Will my website be mobile-friendly?</span>

                </li>
                <li>
                    <img src="{{ asset('/assets/img/faqs-icon.svg') }}" /><span>What type of support do you provide my business on your products or


                        services?</span>
                </li>
            </ul>
        </section>

@endsection
