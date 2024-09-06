<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use DataTables;

class AutherController extends Controller
{
    public function joblist(){
        return view('AutherAdmin.jobList');
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('candidate_data')->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
     
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        // return view('AutherAdmin.jobList');
    }
}
