<?php

namespace App\Models;

use App\Enums\BookingStatusEnum;
use App\Models\Traits\HandleUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageBooking extends Model
{
    use HasFactory, HandleUpload;

    protected $table = 'package_bookings';

    protected $fillable = [
        'package_id',
        'name',
        'phone_number',
        'email',
        'date',
        'number_of_people',
        'address',
        'image',
        'status'
    ];

    protected $dates = ['date'];

    public function getStatusColor()
    {
        if($this->status == BookingStatusEnum::CANCELED) return 'badge bg-warning text-dark';
        if($this->status == BookingStatusEnum::PENDING) return 'badge bg-info text-dark';
        if($this->status == BookingStatusEnum::REJECTED) return 'badge bg-danger';

        return 'badge bg-success';
    }

    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }
}