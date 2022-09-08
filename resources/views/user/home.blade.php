@extends('user.layout.master')
@section('content')

    <home-component  :case-study-first-rows="{{ $caseStudyFirstRows }}"  :case-study-second-rows="{{ $caseStudySecondRows }}"  :blogs-info = "{{ $blogs }}" ></home-component>

@endsection