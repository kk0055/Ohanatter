<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Mail\PostLiked;
use Illuminate\Support\Facades\Mail;


class PostLikeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request,Post $post)
    {
    //     //ユーザがすでにLikeしてたら409返す
    //    if($post->likedBy($request->user())) {
    //        return response(null,409);
    //    }

        $post->likes()->create([
            'user_id' =>  $request->user()->id
        ]);

        //Like押されたらMail送信
        //ユーザーが該当のポストにイイネをしていない場合のみ送信
    // if(!$post->likes()->onlyTrashed()->where('user_id',$request->user()->id)->count()) {
    //     Mail::to($post->user)->send(new PostLiked(auth()->user(),$post));
    // }
        
        return ['user_id' =>  $request->user()->id];  
        // return back();
    }

    public function destroy(Request $request,Post $post)
    {
      $request->user()->likes()->where('post_id',$post->id)->delete();

      return back();

    }
}
