<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;


class CourseController extends Controller
{

    public function webview(){
        return view('uiPages.allcourse.webdevelopment');
    }
    public function webCourse(Request $request){

        if ($request->ajax()) {
            $data = DB::table('web_development_table')->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
     
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('uiPages.allcourse.webdevelopment');

    }
}
