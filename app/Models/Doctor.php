<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'specialty_id',
        'user_id',
        'title',
        'website',
        'max_cap_per_hour',
    ];

    /**
     * Get the specialty that the doctor belongs to.
     */
    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }

    /**
     * Get the user that the doctor belongs to.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}