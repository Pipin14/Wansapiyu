<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Layanan extends Model
{
    protected $table = 'layanans';

    protected $fillable = ['name', 'description', 'image', 'short_description'];
}
