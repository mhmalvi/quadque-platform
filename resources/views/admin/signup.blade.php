@extends('admin.master')
@section('title', 'Admin Signup')
@push('styles')
<style>
  @push('styles')
  <style>
      body {
          margin: 0;
          padding: 0;
          background: url('http://127.0.0.1:8000/assets/img/auth-bg.png');
          /* background: #000; */
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center;
          width: 100%;
          height: 100%;

      }
  </style>
  @endpush


</style>
@endpush
@section('content')

<signup-component></signup-component>

@endsection

