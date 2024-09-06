<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HrController extends Controller
{
    public function loadData(Request $request)
    {
        $data = DB::table('companydata')->get();
        return response()->json($data);
    }

    public function addData(Request $request)
    {
        // Validate the request data
        $request->validate([
            'PostName' => 'required',
            'CompanyName' => 'required',
            // Add other fields as necessary
        ]);

        // Insert the data into the database
        DB::table('companydata')->insert([
            'PostName' => $request->PostName,
            'CompanyName' => $request->CompanyName,
            // Add other fields as necessary
        ]);

        return response()->json(['success' => 'Data added successfully']);
    }

    public function destroy($id)
    {
        // Delete the data from the database
        DB::table('companydata')->where('id', $id)->delete();

        return response()->json(['success' => 'Data deleted successfully']);
    }
    public function edit($id)
    {
        $data = DB::table('companydata')->where('id', $id)->first();
        if (!$data) {
            return redirect()->route('load.data')->with('error', 'Data not found');
        }
        return view('edit', ['data' => $data]);
    }
    public function update(Request $request, $id)
    {
        // Validate incoming data
        $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'dateOfBirth' => 'required|date',
            'email' => 'required|email',
            'mothername' => 'required|string',
            'radio1' => 'required|string',
            'address' => 'required|string',
            'Salary' => 'required|string',
            'experience' => 'required|string',
        ]);

        // Update data in the database
        DB::table('companydata')
            ->where('id', $id)
            ->update([
                'CompanyName' => $request->fname,
                'PostName' => $request->lname,
                'JobPostAt' => $request->dateOfBirth,
                'CompanyEmail' => $request->email,
                'Hrdata' => $request->mothername,
                'Mode' => $request->radio1,
                'Location' => $request->address,
                'salary' => $request->Salary,
                'experience' => $request->experience,
            ]);

        // Redirect back with a success message
        return redirect('/hr')->with('success', 'Record updated successfully!');
    }

}
