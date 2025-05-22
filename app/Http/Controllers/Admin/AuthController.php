<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function register(Request $request){

        if($request->isMethod('post')){
            // $userDate = new user();
            // $userDate->name = $request->name;
            // $userDate->email = $request->email;
            // $userDate->phone = '123456789';
            // $userDate->password = $request->password;
            // $userDate->save();
            // ----------validation----------------
            $request->validate([
                'name'  =>  'required|string',
                'email' =>  'required|email|unique:users',
                'password' =>  'required'
            ]);
            // ----------validation----------------
            
            // ----------save date----------------
            User::create([
                'name'  => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);
            // ----------save date----------------

            return to_route('login')->with('success','Register successfully');
        }
        
        return view('admin.auth.register');
    }

    public function login(Request $request){
        if($request->isMethod('post')){
            // ----------validation----------------
            $request->validate([
                'email' =>'required|email',
                'password' =>'required'
            ]);
            // ----------validation----------------
            if(Auth::attempt([
                'email'=> $request->email,
                'password' => $request->password
            ])){
                return to_route('dashboard');
            }else{
                return to_route('login')->with('error', 'Invalid User And Password');
            }
        }
        return view('admin.auth.login');
    }

    public function dashboard(){
        return view('admin.dashboard.dashboard');
    }

    public function profile(Request $request){

        if($request->isMethod('post')){
            
            $request->validate([
                "name" => "required|string",
                "phone" => "required|numeric" 
            ]);

            $id = auth()->user()->id;
            $user =User::findOrFail($id);
            $user->name = $request->name;
            $user->phone = $request->phone;

            if($request->hasFile('image')){
                $img = $request->file('image');
                $image_name = time().'.'.$img->getClientOriginalExtension();
                // Store the file
                $img->storeAs('img', $image_name, 'public');
                $user->image = $image_name;
            }
            $user->save();
            return to_route('profile')->with('success','Update Successfully');
        }
        return view('admin.dashboard.profile');
    }
    
    public function logout(){

        Session::flush();

        Auth::logout();

        return to_route('login')->with('success', 'Logged out successfully');
    }
}
