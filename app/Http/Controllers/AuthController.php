<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Exception;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
// hello
use Illuminate\Support\Facades\session;

class AuthController extends Controller
{

    public function dashboard()
    {
        // if (Auth::check()) {
        return view('welcome');
        // } else {
        //     return redirect()->route('login');
        // }
    }
    public function login(Request $request)
    {
        $data = $request->validate([
            "email" => 'required|email',
            "password" => 'required'
        ]);

        if (Auth::attempt($data)) {
            return redirect()->route('welcome');
        } else {
            return redirect()->route('login');
        }
    }
    public function register(Request $request)
    {
        $data = $request->validate([
            "name" => 'required',
            "email" => 'required|email',
            "password" => 'required'
        ]);

        $user = User::create($data);
        if ($user) {
            return redirect()->route('login');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function GoogleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleHandle()
    {

        try {

            $user = Socialite::driver('google')->user();
            // dd($user);
            $UserInfo = User::where('email', $user->email)->first();


            if (!$UserInfo) {
                $UserInfo = new User();
                $UserInfo->name = $user->name;
                $UserInfo->email = $user->email;
                $UserInfo->password = "1245Dummy";
                $UserInfo->avatar = $user->avatar;
                $UserInfo->save();
            }

            $data = array(
                "email" => $UserInfo->email,
                "password" => '1245Dummy'
            );

            if (Auth::attempt($data)) {
                return redirect()->route('welcome');
            } else {
                return redirect()->route('login');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
