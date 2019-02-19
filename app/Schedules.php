<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    public function showSchedules($date)
    {
    	$appointments = \App\Appointment::select('appt_time')->where('appt_date', $date)->selectRaw('count(*) as total')->groupBy('appt_time')->get();

    	$time = \App\Schedules::all();

        foreach ($time as $key => $t) {
            unset($t['total_slots_count']);
            unset($t['slots_remaining']);
            $t['total_remaining'] = 10;

            foreach ($appointments as $key => $a) {

                if($t['time'] == $a['appt_time']){
                    $t['total_remaining'] = $t['total_remaining'] - $a['total'];
                }
                
            }
        }
    	return [$date => $time];
    }
}
