<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use PDF;

class PdfGenerateController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdfview(Request $request)
    {
        $ref_id = $_COOKIE['ref_id'];
        $details = \App\Appointment::where('ref_id', $ref_id)->first();

        $bday = \App\BirthCertificate::where('ref_id', $ref_id)->first();
        $age = '';
        
        if(!empty($bday)){
            $birthDate = $bday['date_birth'];
            $birthDate = explode("-", $birthDate);
            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[1], $birthDate[2], $birthDate[0]))) > date("md") 
                ? ((date("Y") - $birthDate[0]) - 1) : (date("Y") - $birthDate[0]));
        }
        view()->share(['details' => $details, 'age' => $age]);

        if($request->has('download')){
        	// Set extra option
        	PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        	// pass view file
            $pdf = PDF::loadView('pages.pdfview');
            // download pdf
            return $pdf->download('pdfview.pdf');
        }
        // dd($details);
        return view('pages.pdfview');
    }
}
