<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class annonce extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'price',
        'localisation',
        'photo',
        'status',
    ];
}
