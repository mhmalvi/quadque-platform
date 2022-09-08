<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('admin.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signup()
    {
        return view('admin.signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:admins|email',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'
        ], [
            'name.required' => 'Name field is empty...!',
            'email.required' => 'Email field is empty...!',
            'email.unique' => 'Email field is already exist...!',
            'email.email' => 'Email field is not valid...!',
            'password.required' => 'Password field is empty...!',
            'password.confirmed' => 'Password does not match with confirmation password...!',
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return response()->json([
            'success' => 'Admin has been signup successfully...wait for activation',

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function check(Request $request)
    {
        //validate the input 
        $request->validate([
            'email' => 'required|exists:admins|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email field is empty...!',
            'email.exist' => 'Email field is not exist...!',
            'email.email' => 'Email field is not valid...!',
            'password.required' => 'Password field is empty...!',
        ]);

        //check admins
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'is_active' => 1])) {

            $request->session()->regenerate();

            $link = route('admin.dashboard');

            return  response()->json([
                'success' => $link
            ]);
        } else {

            return response()->json([
                'fail' => 'Your credentials is wrong or You are pending'
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request, Admin $admin)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
