<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'slug',
        'image',
        'image_2',
        'image_3',
        'thumbnail',
        'teknologi_id',
        'link',
        'tekno',
        'tekno_2',
        'fitur_1',
        'fitur_2',
        'fitur_3',
        'fitur_4',
        'team_id'
    ];

    public function teknologis()
{
    return $this->belongsToMany(Teknologi::class, 'brand_teknologi');
}

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
