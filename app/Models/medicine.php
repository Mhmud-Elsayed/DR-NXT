<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    protected $fillable = [
        'ar_name',
        'en_name',
        'scientific_name',
        'price',
        'usage',
        'medicine_company_id',
        'medicine_unit_id',
        'units_number',
        'barcode',

    ];
    public function prescription_medicines()
    {
        return $this->belongsTo(PrescriptionMedicine::class);
    }

    public function medicine_units()
    {
        return $this->belongsTo(MedicineUnit::class);
    }

    public function medicine_companies()
    {
        return $this->belongsTo(MedicineCompany::class);
    }
}
