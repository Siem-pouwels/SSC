<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'id',
        'name',
        'nationality',
        'rating',
        'position',
        'image',
        'created_at',
        'updated_at'
    ];
}
