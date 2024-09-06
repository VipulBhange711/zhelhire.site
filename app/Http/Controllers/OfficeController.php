<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Support\Str;


class OfficeController extends Controller
{
    public function paymentSlip(Request $request)
    {

        $data = [
            'date' => now()->format('d/m/Y'),
            'employeeName' => 'Vipul Bhange', // Replace with actual employee name
            'designation' => 'PHP Laravel Developer', // Replace with actual designation
            'companyName' => 'Distinct Technology',
            'department' => 'Development',
            'location' => 'Nagpur HO',
            'dateOfJoining' => '30-Dec-2023', // Replace with actual joining date
            'month' => 'March – 2024', // Replace with actual month
            'workingDays' => 26,
            'presentDays' => 24,
            'absentDays' => 2,
            'grossSalary' => '₹12,800.00',
            'deduction' => '₹200.00',
            'netToHand' => '₹10,876.00',
        ];

   
        $path = public_path() . '/images/dtrbg.png';

        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data['logo'] = 'data:image/' . $type . ';base64,' . base64_encode(file_get_contents($path));
    
        // Generate PDF
        $pdf = Pdf::loadView('components.dashboard.page.paymentslip',$data);

        // Stream the PDF
        return $pdf->stream('Salary_Slip.pdf');
    }
    public function InternshipLetter(Request $request)
    {

        $generateDate = Carbon::parse($request->generateDate);
        $start = Carbon::parse($request->startAt);
        $end = Carbon::parse($request->EndAt);
        $durationInMonths = $start->diffInMonths($end);

        $years = intdiv($durationInMonths, 12);
        $months = $durationInMonths % 12;

        // Format the output based on the calculated years and months
        $result = '';
        if ($years > 0) {
            $result .= $years . ' year' . ($years > 1 ? 's' : '');
        }
        if ($months > 0) {
            $result .= ($years > 0 ? ' ' : '') . $months . ' month' . ($months > 1 ? 's' : '');
        }
        $keyword = 'CS'; // Start with a fixed string 'CS'
        $keyword .= mt_rand(10, 99); // Add two random digits, e.g., '11'
        $keyword .= Str::upper(Str::random(2)); // Add two random uppercase letters, e.g., 'WX'
        $keyword .= mt_rand(10000, 99999); // Add five random digits, e.g., '156095'


        // Collecting the data
        $data = array(
            'date' => $generateDate->format('d-m-Y'),
            'id' => $keyword,
            'candidateName' => $request->candidateName,
            'profile' => $request->Profile,
            'companyName' => $request->companyName,
            'companyEmail' => $request->companyEmail,
            'companyWebsite' => $request->companyWebsite,
            'duration' => $result,
            'startAt' => $start->format('d-m-Y'),
            'endAt' =>  $end->format('d-m-Y'),
        );
        
        

        // Handling the image
        $path = public_path('/images/ZhelhireBanner.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $imageData = file_get_contents($path);
        $image = 'data:image/' . $type . ';base64,' . base64_encode($imageData);

        // Adding the image data to the array
        $data['logo'] = $image;
        $data['path'] = $path;

        // Generating the PDF
        $pdf = Pdf::loadView('components.dashboard.page.Intershiplatter', $data)
            ->setPaper('a4')
            ->setOption('isHtml5ParserEnabled', true)
            ->setOption('isRemoteEnabled', true);

        // Returning the PDF to be streamed in the browser
        return $pdf->stream('Internship_Letter.pdf');
    }
    public function AppraisalLetter(Request $request)
    {

        $data = [
            'id' => 'EMP12345', // Example ID, should be dynamic
            'employeeName' => 'Vipul Bhange', // Replace with actual employee name
            'companyName' => 'Distinct Technology',
            'companyWebsite' => 'www.distincttech.com',
            'companyEmail' => 'hr@distincttech.com',
        ];
    
        // Logo image handling
        $path = public_path('/images/ZhelhireBanner.png'); // replace with your actual path
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data['logo'] = 'data:image/' . $type . ';base64,' . base64_encode(file_get_contents($path));
    
        // Generate PDF
        $pdf = Pdf::loadView('components.dashboard.page.Appraisal_Letter', $data);
        
        // Stream the PDF
        return $pdf->stream('Appraisal_Letter.pdf');
        
        // return $pdf->stream('Internship_Letter.pdf');
    }
}
