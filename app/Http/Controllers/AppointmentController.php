<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Response;

class AppointmentController extends Controller
{
    public function createAppointment()
    {
    	$appointment = new \App\Appointment();

        $appointment->registrant_fname = !empty( request('first_name') ) ? strtoupper( request('first_name') ) : strtoupper( request('male_first_name') );
        $appointment->registrant_fname = !empty( $appointment->registrant_fname ) ? $appointment->registrant_fname : strtoupper( request('male_name') );

        $appointment->registrant_lname = !empty( request('last_name') ) ? strtoupper( request('last_name') ) : strtoupper( request('male_surname') );
        $appointment->registrant_lname = !empty( $appointment->registrant_lname ) ? $appointment->registrant_lname : strtoupper( request('female_name') );

    	$appointment->ref_id = str_replace("-", "", $_COOKIE['DATE']) ."-". substr($appointment->registrant_fname, 0, 2) . substr($appointment->registrant_lname, 0, 2) . "-" . date("Hm");
        setcookie('ref_id', $appointment->ref_id);
        
    	$appointment->appt_date = $_COOKIE['DATE'];
    	$appointment->appt_time = $_COOKIE['TIME'];

        $appointment->purpose = request('purpose');
        
        $appointment->has_ctc = request('ctcrequest'); 
        $appointment->ctc_qty = (request('ctcrequest') == "YES") ? request('ctc_qty') : 0;

    	$appointment->is_complete = 'PENDING';
    	$appointment->is_paid = 'PENDING';
    	$appointment->status = 'PENDING';

    	$appointment->save();

    	switch (request('category')) {
            //Main forms
    		case 'birth_certificate':
    			$this->birthCertificate( $appointment->ref_id );
    			break;

    		case 'marriage_certificate':
    			$this->marriageCertificate( $appointment->ref_id );
    			break;

            case 'marriage_license':
                $this->marriageLicense( $appointment->ref_id );
                break;

            case 'death_certificate':
                $this->deathCertificate( $appointment->ref_id );
                break;

            //CTC forms
            case 'ctc_of_birth_certificate':
                $this->birthCertificate( $appointment->ref_id );
                break;

            case 'ctc_of_marriage_certificate':
                $this->marriageCertificate( $appointment->ref_id );
                break;

            case 'ctc_of_death_certificate':
                $this->deathCertificate( $appointment->ref_id );
                break;

            //RA9048
            case 'correction_of_clerical_error_in_marriage_certificate':
                // $this->birthCertificate( $appointment->ref_id );
                break;

            case 'change_of_first_name':
                // $this->marriageCertificate( $appointment->ref_id );
                break;

            case 'correction_of_clerical_error':
                // $this->deathCertificate( $appointment->ref_id );
                break;

            //RA10172
            case 'correction_of_gender':
                // $this->birthCertificate( $appointment->ref_id );
                break;

            case 'correction_of_entry_in_the_day_andor_month_in_the_date_of_birth':
                // $this->marriageCertificate( $appointment->ref_id );
                break;

            //RA9858
            case 'ausf':
                // $this->birthCertificate( $appointment->ref_id );
                break;

            case 'legitimation':
                // $this->marriageCertificate( $appointment->ref_id );
                break;

    		default:
    			# code...
    			break;
    	}
    	
    	return redirect('/appointment');
    }

    public function birthCertificate($ref_id)
    {
    	$birth = new \App\BirthCertificate();

    	$birth->ref_id = $ref_id;

    	$birth->registrant_first_name = request('first_name');
    	$birth->registrant_middle_name = request('middle_name');
    	$birth->registrant_last_name = request('last_name');
    	$birth->registrant_suffix = request('suffix');
    	$birth->gender = request('gender');
        $birth->date_birth = request('date_birth');
    	$birth->place_birth = request('place_birth');
    	$birth->father_first_name = request('father_first_name');
    	$birth->father_middle_name = request('father_middle_name');
    	$birth->father_last_name = request('father_last_name');
    	$birth->mother_first_name = request('mother_first_name');
    	$birth->mother_middle_name = request('mother_middle_name');
    	$birth->mother_last_name = request('mother_last_name');

    	$birth->save();

    }

    public function marriageCertificate($ref_id)
    {
        $marriageCertificate = new \App\MarriageCertificate();

        $marriageCertificate->ref_id = $ref_id;

        $marriageCertificate->male_first_name = request('male_first_name');
        $marriageCertificate->male_middle_name = request('male_middle_name');
        $marriageCertificate->male_surname = request('male_surname');
        $marriageCertificate->male_suffix = request('male_suffix');
        $marriageCertificate->male_age = request('male_age');
        $marriageCertificate->male_nationality = request('male_nationality');
        $marriageCertificate->male_city_address = request('male_city_address');

        $marriageCertificate->female_first_name = request('female_first_name');
        $marriageCertificate->female_middle_name = request('female_middle_name');
        $marriageCertificate->female_surname = request('female_surname');
        //$marriageCertificate->female_suffix = request('female_suffix');
        $marriageCertificate->female_age = request('female_age');
        $marriageCertificate->female_nationality = request('female_nationality');
        $marriageCertificate->female_city_address = request('female_city_address');

        $marriageCertificate->date_marriage = request('date_marriage');
        $marriageCertificate->place_marriage = request('place_marriage');
        
        $marriageCertificate->save();

    }

    public function marriageLicense($ref_id)
    {
        $marriageLicense = new \App\MarriageLicense();

        $marriageLicense->ref_id = $ref_id;

        $marriageLicense->male_name = request('male_name');
        $marriageLicense->male_age = request('male_age');
        $marriageLicense->male_nationality = request('male_nationality');
        $marriageLicense->male_father_deceased = request('male_father_deceased');
        $marriageLicense->male_previously_married = request('male_previously_married');
        $marriageLicense->male_spouse_deceased = request('male_spouse_deceased');
        
        $marriageLicense->female_name = request('female_name');
        $marriageLicense->female_age = request('female_age');
        $marriageLicense->female_nationality = request('female_nationality');
        $marriageLicense->female_father_deceased = request('female_father_deceased');
        $marriageLicense->female_previously_married = request('female_previously_married');
        $marriageLicense->female_spouse_deceased = request('female_spouse_deceased');

        $marriageLicense->years_living_together = request('years_living_together');
        $marriageLicense->target_date_marriage = request('target_date_marriage');

        $marriageLicense->save();

    }

    public function deathCertificate($ref_id)
    {
        $death = new \App\DeathCertificate();

        $death->ref_id = $ref_id;

        $death->first_name = request('first_name');
        $death->middle_name = request('middle_name');
        $death->last_name = request('last_name');
        $death->suffix = request('suffix');
        $death->date_death = request('date_birth');
        $death->place_death = request('place_birth');

        $death->save();

    }

    public function getAppointmentDate()
    {
        $date = request('apptdate');
        $time = request('appttime');
        setcookie('DATE', $date);
        setcookie('TIME', $time);

        return redirect('/form');
    }

    public function getServiceForm()
    {
        $service = $_COOKIE['service'];

        switch ($service) {
            //Main forms
            case 'BIRTH CERTIFICATE':
                return view('pages.user.form.birth_certificate');
            break;
            
            case 'MARRIAGE CERTIFICATE':
                return view('pages.user.form.marriage_certificate');
            break;

            case 'MARRIAGE LICENSE':
                return view('pages.user.form.marriage_license');
            break;

            case 'DEATH CERTIFICATE':
                return view('pages.user.form.death_certificate');
            break;

            //CTC forms
            case 'CTC OF BIRTH CERTIFICATE':
                return view('pages.user.form.CTC.ctc_of_birth_certificate');
            break;
            
            case 'CTC OF MARRIAGE CERTIFICATE':
                return view('pages.user.form.CTC.ctc_of_marriage_certificate');
            break;

            case 'CTC OF DEATH CERTIFICATE':
                return view('pages.user.form.CTC.ctc_of_death_certificate');
            break;

            //RA 9048
            case 'CORRECTION OF CLERICAL ERROR IN MARRIAGE CERTIFICATE':
                return view('pages.user.form.RA9048.correction_of_clerical_error_in_marriage_certificate');
            break;
            
            case 'CHANGE OF FIRST NAME':
                return view('pages.user.form.RA9048.change_of_first_name');
            break;

            case 'CORRECTION OF CLERICAL ERROR':
                return view('pages.user.form.RA9048.correction_of_clerical_error');
            break;


            //RA 10172
            case 'CORRECTION OF GENDER':
                return view('pages.user.form.RA10172.correction_of_gender');
            break;

            case 'CORRECTION OF ENTRY IN THE DAY AND/OR MONTH IN THE DATE OF BIRTH':
                return view('pages.user.form.RA10172.correction_of_entry_in_the_day_andor_month_in_the_date_of_birth');
            break;


            //RA9858
            case 'AUSF':
                return view('pages.user.form.RA9858.ausf');
            break;

            case 'LEGITIMATION':
                return view('pages.user.form.RA9858.legitimation');
            break;

            default:
                # code...
                break;
        }
    }

    public function setService()
    {
        if ( Input::get('service') ) {
            $service = explode("_", Input::get('service'));
            
            setcookie('service', strtoupper(implode(" ", $service)));
            
            return view('pages.user.terms', ["service" => strtoupper($service[0]) . " ". strtoupper($service[1])] );
        }else{
            return view('pages.user.terms');
        }
        
    }

    public function getRequirements()
    {
        $service = $_COOKIE['service'];
        $requirement = \App\Requirement::where('category', $service)->get();

        return view('pages.user.requirements', ['requirements' => $requirement]);
    }

    public function getAppointmentDetails()
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
        
        // dd($details);
        return view('pages.user.appointmentdetails', ['appointmentdetails' => $details, 'age' => $age]);
    }

    
}
