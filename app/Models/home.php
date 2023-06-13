<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class home extends Model
{
    use HasFactory;
    use SoftDeletes;

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
        return $this->belongsTo(city::class, 'state_id', 'id');
    }
}
