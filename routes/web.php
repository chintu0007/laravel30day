<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function (){
    //$jobs = Job::all();
    //dd($jobs);
});

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    //$jobs = Job::all();
    $jobs = Job::with('employer')->paginate(3);
    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/job/{id}', function ($id) {

    $job = Job::find($id);
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
