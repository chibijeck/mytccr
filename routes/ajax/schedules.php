<?php 

// @url http://localhost:8000/ajax/schedules/2019-02-19
Route::get('{schedules}', function (\App\Schedules $schedules, $date) {
    return $schedules->showSchedules($date);
});