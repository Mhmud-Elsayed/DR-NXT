<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prescription extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'branch_id',
        'doctor_id',
        'note',
    ];
    
    public function branch(){
        return $this->belongsTo(Branch::class);
    }
    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
