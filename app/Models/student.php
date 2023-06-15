<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'lastname_p',
        'lastname_m',
        'img',
        'email',
        'phone',
        'birthdate',
        'gender',
        'curp'
    ];

    public function home()
    {
        return $this->hasOne(home::class, 'homes_id', 'id');
    }



 
}
