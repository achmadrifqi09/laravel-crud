<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillabel = ['package_name', 'description', 'price', 'facilities', 'url_photo'];
    protected $guarded = [];
}
