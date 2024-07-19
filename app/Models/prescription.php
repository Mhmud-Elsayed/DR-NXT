<?php

// Prescription.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'branch_id', 'doctor_id', 'note'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }



    public function medicines()
    {
        return $this->hasMany(PrescriptionMedicine::class);
    }

    public function tests()
    {
        return $this->hasMany(PrescriptionTest::class);
    }

    public function rays()
    {
        return $this->hasMany(PrescriptionRay::class);
    }
}
