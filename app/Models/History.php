<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_id ',
        'humidity',
        'icon',
        'description',
    ];

    protected $table = 'history_city';

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
