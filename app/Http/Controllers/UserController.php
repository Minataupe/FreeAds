<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;

class UserController extends Controller
{
    //

    public function showRegister(){
        return view('register');
    }
    public function showLogin(){
        return view('login');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $user = User::create(request(['name', 'email', 'password']));
        event(new Registered($user));
        auth()->login($user);
        
        return redirect()->to('/register/');
    }


    public function showProfile(){
     return view("profile");
    }
    public function login()
   {
         $this->validate(request(), [
              'email' => 'required|email',
              'password' => 'required'
         ]);
         if (auth()->attempt(request(['email', 'password']))) {
              return redirect()->to('/profile/');
         }else{

             return back()->withErrors([
                 'message' => 'Please check your credentials and try again.'
                ]);
            }
   }

   
public function profileUpdate(Request $request){
    //validation rules

    $request->validate([
        'name' =>'required|min:4|string|max:255',
        'email'=>'required|email|string|max:255'
    ]);
    $user =Auth::user();
    $user->name = $request['name'];
    $user->email = $request['email'];
    $user->save();
    return back()->with('message','Profile Updated');
}

public function delete($id){
    
    $user =User::find($id);
    $user->delete();
    return redirect()->to('/')->with('message','Profile deleted');
}


}
