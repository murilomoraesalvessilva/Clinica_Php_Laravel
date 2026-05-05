<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
use App\Models\Doctor;
class Consultation extends Model
{
    protected $fillable = [
        'patient_id',
        'doctor_id',
        'consultation_time',
        'status',
        'observations'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class);
    }

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }
}
