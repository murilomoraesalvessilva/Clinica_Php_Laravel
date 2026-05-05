<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'specialty',
        'crm'
    ];

    public function Consultations() {
        return $this->hasMany(Consultation::class);
    }
}
