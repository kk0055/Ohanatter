@props(['post' => $post])


<div class="mb-4">
  <img src="/storage/profile_image/{{ $post->user->profile_image }}" alt="" class="" width="100px" height="100px" style="border-radius:50%;">
    <a href="{{ route('users.posts' , $post->user) }}" class="font-bold">{{ $post->user->name }}</a>
    <span class="text-gray-600">{{ $post->created_at->diffForHumans() }}</span>
    <p class="mb-2"> {{ $post->body}}</p>

        {{-- Delete Button --}}
    @can('delete',$post)
    <div class="flex justify-end">
      <form action="{{ route('post.destroy', $post) }}"  method="post">
        @csrf
        @method('delete')
     <button type="submit" class="bg-gray-500 text-white rounded-lg text-sm p-1">Delete</button>
      </form>
    </div>
    @endcan
    {{--End Delete Button --}}
<div class="flex items-center">
@auth
@if (!$post->likedBy(auth()->user()))

<form action="{{ route('post.likes' ,$post->id) }}" method="post" class="mr-1">
 @csrf
<button type="submit" class="focus:outline-none"><i class="fas fa-thumbs-up text-red-500 ml-2 "></i></button>
</form>
@else
<form action="{{ route('post.likes', $post) }}" method="post" class="mr-1">
@csrf
@method('delete')
<button type="submit" class="text-blue-500 focus:outline-none"><i class="fas fa-thumbs-down text-blue-500 ml-2"></i></button>
</form>

@endif
@endauth 
<i class="fas fa-heart text-pink-500 ml-2"></i>
<span class="ml-1">{{ $post->likes->count() }} 
 
  {{-- {{ Str::plural('like',$post->likes->count()) }} --}}</span>    


    </div>
  </div>