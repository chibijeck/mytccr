<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function index()
    {
    	$appointment = \App\Appointment::orderBy('id', 'DESC')->get();

    	return view('pages.admin.appointments', ['appointments' => $appointment]);
    }

    public function updateAppointmentStatus()
    {
        if( !empty(request('ref_id')) ){
            $updatedRefId = \App\Appointment::where(
                'ref_id', request('ref_id')
            )->update(
                [   
                    'is_complete' => request('is_complete'),
                    'is_paid' => request('is_paid'), 
                    'status' => request('status')
            ]);
            return redirect('/release')->with('msg', 'Application has been updated!');
        }else{
            return view('pages.admin.release');
        }
    }

    public function search()
    {
        $appointment = \App\Appointment::all();
        $applicant = \App\Appointment::where('ref_id', request('ref_id'))->first();

        return view('pages.admin.release', ['applicant' => $applicant, 'appointments' => $appointment]);
    }

    public function adminLogin()
    {
    	$employee = \App\Employee::where(
    		[
    			'employee_email' => request('email'),
    			'employee_password' => request('password')
    		])->first();

    	if( !empty($employee) ){
    		setcookie('employee', $employee->employee_name);
    		setcookie('account_type', $employee->account_type);
    		return redirect('/admin');	
    	}else{
    		return json_encode(["error_msg" => "You have no access here!"]);
    	}
    	
    }

    public function actionUser()
    {

        if( request('action') == "create" ){
            $this->createUser();
        }elseif ( request('action') == 'update' ) {
            if( empty(request('employee_email')) ) {
                $employee = \App\Employee::where('employee_id', request('employee_id'))->first();
                return view('pages.admin.manageuser', ['employee' => $employee, 'action' => 'update']);
            }else{
                $update = \App\Employee::where(
                        'employee_id', request('employee_id')
                    )->update(
                        [   
                            'employee_id' => request('employee_id'),
                            'employee_name' => request('employee_name'), 
                            'employee_email' => request('employee_email'),
                            'employee_password' => request('employee_password'),
                            'account_type' => request('account_type')
                    ]);
                return redirect('/manageuser')->with('msg', 'Account has been updated!');
            }
            
        }
        return redirect('/manageuser');
    }

    public function listUser()
    {
        $employee = \App\Employee::all();
        return view('pages.admin.manageuser', ['employee' => $employee]);
    }

    public function createUser()
    {
    	$createUser = new \App\Employee();
    	
    	$createUser->employee_id = request('employee_id');
    	$createUser->employee_name = request('employee_name');
    	$createUser->employee_email = request('employee_email');
    	$createUser->employee_password = request('employee_password');
    	$createUser->account_type = request('account_type');

    	$createUser->save();

    	return redirect('/manageuser')->with('msg', 'Account has been created!');
    }

    public function user()
    {
        return view('pages.admin.manageuser', ['action' => 'create']);
    }
}
