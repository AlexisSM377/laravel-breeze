<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;

    protected $fillable = [
        'state_id',
        'name'
    ];

    public function state()
    {
        return $this->hasOne(state::class, 'id', 'state_id');
    }
    public function homes()
    {
        return $this->hasMany(home::class, 'id', 'city_id');
    }
}
