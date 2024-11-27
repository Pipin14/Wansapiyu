<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Galeri extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function portofolio()
    {
        return $this->belongsTo(Portofolio::class);
    }
}
