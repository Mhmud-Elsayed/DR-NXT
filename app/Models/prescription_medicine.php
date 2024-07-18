<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prescription_medicine extends Model
{
    use HasFactory;
    protected $fillable = [
        "prescription_id",
        "medicine_id",
        "dosage",
        "duration",
        "note",
    ];
    public function medicine(){
        return $this->belongsToMany(Medicine::class);
    }
    public function prescription(){
        return $this->belongsToMany(Prescription::class);
    }
}
