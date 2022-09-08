<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>QuadQue Technology</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/icon.png') }}">

    <!-- Bootstrap CSS -->
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
   


</head>
<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark text-white">
            <a class="navbar-brand pl-2 text-white" href="{{ route('admin.dashboard') }}">QuadQue Technology Limited</a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNavDropdown">
                 <ul class="navbar-nav text-white">
                     <li class="nav-item active">
                         <a class="nav-link text-white" href="{{ route('admin.casestudy') }}">Case Study</a>

                     </li>
                     <li class="nav-item ">
                         <a class="nav-link text-white" href="{{ route('admin.blog') }}">Blog</a>


                     </li>
                     
                 </ul>
             </div>
            <div class="ml-auto mr-4">
                <span class="mr-2">{{ Auth::guard('admin')->user()->name  }}</span>
                <a href="javasscript:void(0)" class="text-danger " style="text-decoration:none" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">Logout</a>
                <form id="logoutForm" action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                </form>
            </div>

        </nav>

    </div>

    <div class="container">
        <div id="app">
           
            @yield('content')

        </div>
    </div>



    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-typical@latest/dist/vue-typical.umd.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function() {
        $('#summernote').summernote({
             height: 250,
          

        });
        });

    </script>

</body>
</html>

