<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ConsultationController;

Route::get('/', function () {
    return view('patient.index');
});

Route::resource('patients', PatientController::class);
Route::resource('doctors', DoctorController::class);
Route::resource('consultations', ConsultationController::class);
