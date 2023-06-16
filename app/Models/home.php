<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class home extends Model
{
    use HasFactory;
    // use SoftDeletes;

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
        return $this->hasOne(city::class);
    }

    public function state()
    {
        return $this->hasOne(state::class);
    }

    public function student()
    {
        return $this->belongsTo(student::class);
    }


}
