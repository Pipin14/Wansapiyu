<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portofolio extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function galeris()
    {
        return $this->hasMany(Galeri::class, 'portofolio_id');
    }
}
