<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    function loginView()
    {
        return view("login");
    }

    function registerView()
    {
        return view("register", [
            'title' => 'Register',
        ]);
    }

    function doLogin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',   // required and email format validation
            'password' => 'required', // required and number field validation

        ]); // create the validations
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {

            return back()->withInput()->withErrors($validator);
            // validation failed redirect back to form

        } else {
            if (Auth::attempt($request->only(["email", "password"]))) {

                return redirect("Dashboard")->with('success', 'Berhasil Masuk');
            } else {
                return back()->withErrors( "Email dan Password Salah");
            }
        }
    }

    function doRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',   // required and email format validation
            'password' => 'required|min:8', // required and number field validation
            'confirm_password' => 'required|same:password',

        ]); // create the validations
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {

            return back()->withInput()->withErrors($validator);
            // validation failed redirect back to form

        } else {

            // $password = Str::upper(Str::random(8));
            $User = new User;
            $User->name = $request->name;
            $User->level = $request->level;
            $User->email = $request->email;
            $User->password = bcrypt($request->password);
            $User->save();
            
            return redirect('/list-user');
        }
    }

    public function index()
    {
        // mengambil data dari table 
    	// $users = DB::table('users')->get();
        $user = user::all();
 
    	// mengirim data ke view index
    	return view('list-user',['users' => $user]);
    }

    function dashboard()
    {
        return view('dashboard', [
            'title' => 'Dashboard',
        ]);
    }

    function logout()
    {
        Auth::logout();
        return redirect("/")->with('success', 'Berhasil Keluar');;
    }
}