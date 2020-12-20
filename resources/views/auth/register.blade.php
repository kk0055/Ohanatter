@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
   <div class="w-4/12 bg-white p-6 rounded-lg">
    <form action="" action="{{ route('login') }}" method="post" enctype="multipart/form-data">
      @csrf

      <div class="mb-4">
        <label for="profile_image" class="">Profile Image</label>
        <input type="file" name="profile_image" id="profile_image" 
         class="" >
        
        </div>
      <div class="mb-4">
<label for="name" class="sr-only">Name</label>
<input type="text" name="name" id="name" placeholder="Your name"
 class="bg-gray-100 border-2 w-full rounded-lg" value="test1">

 @error('name')
<div class="text-red-500 mt-2 text-sm">
  {{ $message }}
</div>
 @enderror
      </div>

<div class="mb-4">
<label for="username" class="sr-only">Username</label>
<input type="text" name="username" id="username" placeholder="Your Username"
class="bg-gray-100 border-2 w-full rounded-lg" value="test1">

@error('username')
<div class="text-red-500 mt-2 text-sm">
  {{ $message }}
</div>
 @enderror
</div>

<div class="mb-4">
<label for="email" class="sr-only">Email</label>
<input type="text" name="email" id="email" placeholder="Your Email"
class="bg-gray-100 border-2 w-full rounded-lg" value="test1@test.com">

@error('email')
<div class="text-red-500 mt-2 text-sm">
  {{ $message }}
</div>
 @enderror
    </div>

<div class="mb-4">
  <label for="password" class="sr-only">password</label>
  <input type="password" name="password" id="password" placeholder="password"
  class="bg-gray-100 border-2 w-full rounded-lg" value="12345678">
  @error('password')
  <div class="text-red-500 mt-2 text-sm">
    {{ $message }}
  </div>
   @enderror
</div>

<div class="mb-4">
  <label for="password_confirmation" class="sr-only">password again</label>
  <input type="password" name="password_confirmation" id="password_confirmation" placeholder="password"
  class="bg-gray-100 border-2 w-full rounded-lg" value="12345678">

</div>

  <button type="submit" class="bg-orange-500  w-full text-white rounded-lg">Register</button>
    </form>
   </div>
    </div>
@endsection