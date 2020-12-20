<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

  
  public function index()
  {
    return view('auth.register');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
       'name' => 'required|max:255',
       'username' => 'required|max:255',
       'email' => 'required|email|max:255',
       'password' => 'required|confirmed',
    ]);
  
   if($request->hasFile('profile_image')){
     $filenameWithExt = $request->file('profile_image')->getClientOriginalName();
     $filename = pathinfo($filenameWithExt ,PATHINFO_FILENAME);
     $extension = $request->file('profile_image')->getClientOriginalExtension();
     $fileNameToStore = $filename . '_'. time(). '.'.$extension;
     $path = $request->file('profile_image')->storeAs('public/profile_image',  $fileNameToStore);
   }else {
     $fileNameToStore = 'noimage.jpg';
   }

    User::create([
        'name' => $request->name, 
        'username' => $request->username, 
        'email' => $request->email, 
        'password' => Hash::make($request->password), 
        'profile_image' => $fileNameToStore
    ]);
    
         
  auth()->attempt($request->only('email','password'));
    
  return redirect()->route('dashboard');

  }

  public function uploadFile()
  {

    return redirect()->route('dashboard');
  }
}
