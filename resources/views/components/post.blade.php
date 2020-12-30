@props(['post' => $post])


<div class="mb-5">
  
  <img src="{{ $post->user->profile_image }}" alt="" class="" width="100px" height="100px" style="border-radius:50%;">
  <img src="/storage/profile_image/{{ $post->user->profile_image }}" alt="" class="" width="100px" height="100px" style="border-radius:50%;">
    <a href="{{ route('users.posts' , $post->user) }}" class="font-bold">{{ $post->user->name }}</a>
    <span class="text-gray-600">{{ $post->created_at->diffForHumans() }}</span>
    <p class="mb-2"> {{ $post->body}}</p>
   
        {{-- Delete Button --}}
    @can('delete',$post)
    <div class="flex justify-end" >
      <form action="{{ route('post.destroy', $post) }}"  method="post">
        @csrf
        @method('delete')
     <button type="submit" class="bg-gray-500 text-white rounded-lg text-sm p-1">Delete</button>
      </form>
    </div>
    @endcan
    {{--End Delete Button --}}

<div class="flex items-center">

  <like-component
  :post="{{ $post->id }}"
  ></like-component> 
 
     </div>
  </div>