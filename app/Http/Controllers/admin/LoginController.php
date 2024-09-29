<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(){
        return view('admin/login');
    }

    public function authenticate(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:5',
        ];
    
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('admin.login')
                ->withInput()
                ->withErrors($validator);
        }
    
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // Check if the logged-in admin has the "admin" role
            if (Auth::guard('admin')->user()->role != "admin") {
                Auth::guard('admin')->logout();
                return redirect()->route('admin.login')
                    ->with('error', 'You are not authorized to access this page.');
            }
    
            // Successful login
            return redirect()->route('admin.dashboard');
        } else {
            // Invalid credentials
            return redirect()->route('admin.login')
                ->withInput()
                ->with('error', 'Either email or password is incorrect.');
        }
    }
    

    // This method will logout admin user
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('home');
    }
}
