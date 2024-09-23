<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teknologi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'slug',
        'image'
    ];

    // Relasi Teknologi dengan Brand
    public function brands()
    {
        return $this->hasMany(Brand::class, 'teknologi_id');
    }
}

