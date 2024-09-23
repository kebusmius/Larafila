<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'image',
    ];

    // Relasi dengan Brand (Author memiliki banyak brand)
    public function brands()
    {
        return $this->hasMany(Brand::class);
    }
}
