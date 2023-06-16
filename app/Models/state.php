<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre'
    ];

    public function home()
    {
        return $this->belongsTo(Home::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }


    
}
