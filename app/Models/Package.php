<?php

namespace App\Models;

use App\Models\Traits\HandleUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory, HandleUpload;

    protected $fillable = [
        'package_code',
        'package_name',
        'description',
        'price',
        'image'
    ];
}
