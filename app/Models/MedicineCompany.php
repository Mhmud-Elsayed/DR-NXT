<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineCompany extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Define the one-to-many relationship with Medicine.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicines()
    {
        return $this->hasMany(Medicine::class);
    }
}
