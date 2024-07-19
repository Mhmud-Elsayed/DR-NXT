<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date',
        'booking_type_id',
        'user_id',
        'branch_id',
        'doctor_id',
        'status',
    ];

    /**
     * Get the booking type that the booking belongs to.
     */
    public function bookingType()
    {
        return $this->belongsTo(BookingType::class);
    }

    /**
     * Get the user that made the booking.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the branch where the booking is made.
     */
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    /**
     * Get the doctor for the booking.
     */
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}