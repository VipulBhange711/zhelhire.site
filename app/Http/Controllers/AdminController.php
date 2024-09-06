<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function admin(){
        return view('Admin.adminpage');
    }
    public function register(Request $reques){
       $name = $reques->input('name');
       $email = $reques->input('email');
       $password = $reques->input('password');



       $data = array('name'=>$name,
            'email'=>$email,
            'password' =>$password
    );
       DB::table('user')->insert($data);
      

   
        return redirect('');
    }

    public function login(Request $request)
{
    $name = $request->input('name');
    $password = $request->input('password');

    // Check if name and password match expected credentials
    if ($name === "Admin" && $password === "Admin") {
        return redirect()->route('paiosdpfaijsdpfiajpsodjfoahsdkojfoajsdoflkmlknpas');
    } else {
        // Redirect back with an error message if credentials are incorrect
        return redirect()->back()->with('error', 'Invalid credentials.');
    }
}

    
}
