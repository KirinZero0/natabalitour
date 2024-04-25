<?php

namespace App\Enums;

use Illuminate\Validation\Rules\Enum;

class BookingStatusEnum extends Enum
{
    const PENDING = 'pending';
    const APPROVED = 'approved';
    const  REJECTED = 'rejected';
    const CANCELED  = 'canceled';
}
