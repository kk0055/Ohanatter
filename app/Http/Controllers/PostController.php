<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
  

    public function __construct()
    {
        $this->middleware('auth')->only('store','destroy');
    }

    public function index()
    {
        //with('user','likes')..Queryを減らす
         $posts = Post::with('user','likes')->orderBy('created_at','desc')->paginate(20);

         
        return view('posts.index',[
            'posts' => $posts
        ] );
    }

    public function store(Request $request)
    {
      $this->validate($request, [
          'body' => 'required'
      ]);
      $request->user()->posts()->create($request->only('body'));
        return back();

    }

   public function show(Post $post)
   {
       return view('posts.show',[
           'post' => $post
       ]);
   }

    public function destroy(Post $post)
    {
        //AuthserviceProvider,PostPolicyより
        $this->authorize('delete',$post) ;

       $post->delete();

       return back();
    }
}
