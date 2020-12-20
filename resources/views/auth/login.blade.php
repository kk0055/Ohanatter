

@extends('layouts.app')

@section('content')
    <div class="flex justify-center mb-4">
   <div class="w-4/12 bg-white p-6 rounded-lg">
    @if (session('status'))
    <div class="bg-red-500  rounded-lg mb-2 text-white text-center">
      {{ session('status') }}
    </div>
   
    @endif
    <form action="" action="{{ route('register') }}" method="post">
      @csrf
      <img src="https://pbs.twimg.com/profile_images/1334424438515724289/nFwNwvbc_400x400.jpg" alt="" class="" width="100px" height="100px" style="border-radius:50%;">
<div class="mb-4">
<label for="email" class="sr-only">Email</label>
<input type="hidden" name="email" id="email" placeholder="Your Email"
class="bg-gray-100 border-2 w-full rounded-lg" value="ohana@test.com">

@error('email')
<div class="text-red-500 mt-2 text-sm">
  {{ $message }}
</div>
 @enderror
    </div>

<div class="mb-4">
  <label for="password" class="sr-only">password</label>
  <input type="hidden" name="password" id="password" placeholder="password"
  class="bg-gray-100 border-2 w-full rounded-lg" value="12345678">
  @error('password')
  <div class="text-red-500 mt-2 text-sm">
    {{ $message }}
  </div>
   @enderror
</div>
{{-- <div class="mb-4">
 <div class="flex items-center">
  <input type="checkbox" name="remember"  id="remember"
  class="mr-2" >
  <label for="remember">Remember me</label>
 </div>
</div> --}}

<div class="mb-4 ">
  <button type="submit" class="bg-orange-500  w-full text-white rounded-lg">Login</button>
</div>
    </form>
   </div>
    </div>

    {{-- 2つ目 --}}
    <div class="flex justify-center">
      <div class="w-4/12 bg-white p-6 rounded-lg">
       @if (session('status'))
       <div class="bg-red-500  rounded-lg mb-2 text-white text-center">
         {{ session('status') }}
       </div>
      
       @endif
       <form action="" action="{{ route('register') }}" method="post">
         @csrf
         <button type="submit" >
         <img src="https://pbs.twimg.com/profile_images/1334424438515724289/nFwNwvbc_400x400.jpg" alt="" class="" width="100px" height="100px" style="border-radius:50%;"></button>
   <div class="mb-4">
   <label for="email" class="sr-only">Email</label>
   <input type="hidden" name="email" id="email" placeholder="Your Email"
   class="bg-gray-100 border-2 w-full rounded-lg" value="ohana2@test.com">
   
   @error('email')
   <div class="text-red-500 mt-2 text-sm">
     {{ $message }}
   </div>
    @enderror
       </div>
   
   <div class="mb-4">
     <label for="password" class="sr-only">password</label>
     <input type="hidden" name="password" id="password" placeholder="password"
     class="bg-gray-100 border-2 w-full rounded-lg" value="12345678">
     @error('password')
     <div class="text-red-500 mt-2 text-sm">
       {{ $message }}
     </div>
      @enderror
   </div>
   {{-- <div class="mb-4">
    <div class="flex items-center">
     <input type="checkbox" name="remember"  id="remember"
     class="mr-2" >
     <label for="remember">Remember me</label>
    </div>
   </div> --}}
   
   <div class="mb-4 ">
     <button type="submit" class="bg-orange-500  w-full text-white rounded-lg">Login</button>
   </div>
       </form>
      </div>
       </div>
@endsection