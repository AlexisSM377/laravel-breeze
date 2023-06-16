<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Home extends Model
{
    use HasFactory;

    protected $tabla = 'homes';

    protected $fillable = [
        'cologne',
        'cp',
        'street',
        'no_ext',
        'state_id',
        'city_id'
    ];

    public function city()
    {
        return $this->hasOne(City::class);
    }

    public function state()
    {
        return $this->hasOne(State::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }


}
