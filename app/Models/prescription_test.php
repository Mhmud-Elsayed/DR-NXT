<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prescription_test extends Model
{
    use HasFactory;
    protected $fillable = [
        'prescription_id',
        'test_id',
        "note"
    ];
    public function prescription(){
        return $this->belongsToMany(Prescription::class);
    }
    public function test(){
        return $this->belongsToMany(Test::class);
    }

    
}
