<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body class="max-w-screen overflow-y-scroll">
  <div class="container mx-auto px-4 lg:px-0">
    <header class="flex content-between items-center border-b border-grey-light py-3">
      <h1 id="home" class="font-serif text-4xl text-blue-dark ml-0">
        Knowledge Base
      </h1>
      <div class="flex items-center ml-auto">
        <h4 class="font-serif text-blue-dark text-1xl">Hello {{ Auth::user()->name }}!</h4> &nbsp;
        <button id="createarticle" class="font-sans bg-transparent hover:bg-blue text-blue hover:text-white text-sm border border-blue rounded p-2">
            Create Article
        </button> &nbsp;
        <button class="font-sans bg-transparent hover:bg-blue text-blue hover:text-white text-sm border border-blue rounded p-2" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">

            <!-- <a class="no-underline text-blue hover:bg-blue-darker" href="{{ route('logout') }}" -->

            <!-- </a> -->
            Logout
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </button>
      </div>
    </header>

    <ul class="w-full list-reset flex justify-between scrolling-touch overflow-auto py-3 px-2">
      <li class="mx-2 lg:mx-0">
        <a href="#" class="font-sans no-underline hover:underline text-blue-dark">
                    World
                </a>
      </li>

      <li class="mx-2 lg:mx-0">
        <a href="#" class="font-sans no-underline hover:underline text-blue-dark">
                    Technology
                </a>
      </li>


      <li class="mx-2 lg:mx-0">
        <a href="#" class="font-sans no-underline hover:underline text-blue-dark">
                    Business
                </a>
      </li>
      <li class="mx-2 lg:mx-0">
        <a href="#" class="font-sans no-underline hover:underline text-blue-dark">
                    Politics
                </a>
      </li>

      <li class="mx-2 lg:mx-0">
        <a href="#" class="font-sans no-underline hover:underline text-blue-dark">
                    Science
                </a>
      </li>
      <li class="mx-2 lg:mx-0">
        <a href="#" class="font-sans no-underline hover:underline text-blue-dark">
                    Health
                </a>
      </li>      
    </ul>
  </div>
        <main role="main" class="container mx-auto px-4 lg:px-0">
            @yield('content')
        </main>

<footer class="bg-grey-lighter border-t border-grey text-grey-dark py-8">
  <div class="container mx-auto text-center">
    <p>
      Blog template originally built for
      <a href="#" class="no-underline hover:underline text-blue">Bootstrap</a> by
      <a href="#" class="no-underline hover:underline text-blue">@mdo</a>.
    </p>
    <p class="mt-4">
      <a href="#" class="no-underline hover:underline text-blue">Back to top</a>
    </p>
  </div>
</footer>
</body>
<script>
    $('#createarticle').click(function(){
        window.location.href = '/createarticle';
    });
    $('#home').click(function(){
        window.location.href = '/home';
    })
</script>
</html>
