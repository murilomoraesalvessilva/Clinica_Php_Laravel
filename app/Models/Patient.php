<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'date_birth',
        'observations'
    ];

    public function Consultations() {
        return $this->hasMany(Consultation::class);
    }
}
