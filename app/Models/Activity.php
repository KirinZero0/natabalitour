<?php

namespace App\Models;

use App\Models\Traits\HandleUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory, HandleUpload;

    protected $table = 'activities';
    
    protected $fillable = [
        'activity_code',
        'activity_name',
        'description',
        'price',
        'image'
    ];
}
