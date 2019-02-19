<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function showSchedules($date)
    {
    	$appointments = \App\Appointment::where('appt_date', $date)->get();
    	$schedules = \App\Schedules::all();
    	return $appointments;
    }
}
