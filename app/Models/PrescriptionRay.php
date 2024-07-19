<?php

// app/Models/PrescriptionRay.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrescriptionRay extends Model
{
    use HasFactory;

    protected $fillable = ['prescription_id', 'ray_id', 'note'];

    public function prescription()
    {
        return $this->belongsTo(Prescription::class);
    }

    public function ray()
    {
        return $this->belongsTo(Ray::class);
    }
}
