<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;


class MyController extends Controller
{
    public function home()
    {
        //   Artisan::call('optimize');
        //   return 'Application optimized!';
        return view('uiPages.index');
    }
    public function contact()
    {
        return view('uiPages.contact-us');
    }
    public function services()
    {
        return view('uiPages.our-services');
    }
    public function about()
    {
        return  view('uiPages.about-us');
    }
    public function vip()
    {
        $table = DB::table('testdb')->get();
        return  $table;
    }

    public function inquery(Request $request)
    {
        $name =  $request->name;
        $email =  $request->email;
        $contact =  $request->contact;
        $message =  $request->message;

        $data = array(
            'inq_name' => $name,
            'inq_email' => $email,
            'inq_contact' => $contact,
            'inq_message' => $message
        );

      $success =   DB::table('inquiry_form')->insert($data);

        return response()->json(['success' => 'Message sent successfully!', 'done'=>$success]);
    }
}
