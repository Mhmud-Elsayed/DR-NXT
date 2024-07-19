<?php

// app/Models/PrescriptionTest.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrescriptionTest extends Model
{
    use HasFactory;

    protected $fillable = ['prescription_id', 'test_id', 'note'];

    public function prescription()
    {
        return $this->belongsTo(Prescription::class);
    }

    public function test()
    {
        return $this->belongsTo(Test::class);
    }
}
