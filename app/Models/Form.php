<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $table='forms';

    protected $fillable = ['name','hobbies','mobile','email'];

    public function sethobbyAttribute($value)
    {
        $this->attributes['Hobbies'] = json_encode($value);
    }

    public function getHobbyAttribute($value)
    {
        return $this->attributes['Hobbies'] = json_decode($value);
    }
    
}
