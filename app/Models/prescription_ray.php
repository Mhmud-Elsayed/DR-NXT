<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prescription_ray extends Model
{
    use HasFactory;

    protected $fillable = [
        'prescription_id',
        'ray_id',
        'note',
    ];
    public function prescription(){
        return $this->belongsToMany(Prescription::class);
    }
    public function ray(){
        return $this->belongsToMany(ray::class);
    }
}
