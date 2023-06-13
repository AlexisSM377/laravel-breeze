<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre'
    ];

    public function citys()
    {
        return $this->hasMany(city::class, 'state_id', 'id');
    }
}
