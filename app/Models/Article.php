<?php

namespace App\Models;

use App\Models\Traits\HandleUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory, HandleUpload;

    protected $fillable = [
        'article_code',
        'article_title',
        'description',
        'image'
    ];
}
