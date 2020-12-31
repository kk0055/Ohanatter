@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
   <div class="w-8/12 ">
<div class="p-6">
  <img src="{{ $user->profile_image }}" alt="" class="" width="100px" height="100px" style="border-radius:50%;">
  <img src="/storage/profile_image/{{ $user->profile_image }}" alt="" class="" width="100px" height="100px" style="border-radius:50%;">
  <h1 class="text-2xl font-medium mb-1">{{ $user->name }}</h1>

  <p> {{ $posts->count() }} {{ Str::plural('post',$posts->count()) }} </p>

  {{-- <p> {{ $posts->count() }} {{ Str::plural('post',$posts->count()) }} and received {{ $user->receivedLikes->count() }} likes</p> --}}
</div>
    <div class="bg-white p-6 rounded-lg ">
    @if ($posts->count())
  
    @foreach ($posts as $post)
    <div class=" border-blue-200 border-2 mb-4 rounded-lg p-2">
  <x-post :post="$post"/>
</div>
    @endforeach

    {{ $posts->links() }}
    @else
      <p>{{ $user->name }} has no post</p>  
    @endif
  </div>
   </div>
    </div>
   </div>
    </div>
@endsection