<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'address',
        'phone',
        'clinic_id',
        'image',
    ];

    /**
     * Get the clinic that owns the branch.
     */
    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }
}