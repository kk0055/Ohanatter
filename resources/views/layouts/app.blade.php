<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ohanatter</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

</head>
<body class="bg-gray-400" >
  <nav class="p-4 bg-white flex justify-between mb-2">
    <ul class="flex items-center">

     @if(auth()->user()) 
    <li>
     <a href="{{ route('users.posts', auth()->user()) }}" class="p-3" >{{ auth()->user()->username }}</a>
   </li>
    @endif

   
  <li>
    <a href="{{ route('posts') }}" class="p-3">Post</a>
  </li>
    </ul>
    <img src="{{ asset('/image/Ohana/Ohana.jpg') }}" alt="" class="" width="30px" height="30px" style="border-radius:50%;">
    <ul class="flex items-center">
   @auth

  <li>
 <form action="{{ route('logout') }}" method="post" class="p-3 inline">
  @csrf
<button type="submit" class="focus:outline-none ml-2" >
 Logout
</button>
 </form>
  </li>
   @endauth
     @guest
   <li>
    <a href="{{ route('login') }}" class="p-3">Login</a>
  </li>
   
     {{-- <li>
      <a href="{{ route('register') }}" class="p-3">Register</a>
    </li> --}}
    @endguest
       </ul>
  </nav>
  @yield('content')
  <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>