<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $table = 'reviews';

    public $fillable = [
        'user_id',
        'skill_id',
        'rating',
        'message'
    ];


    public static array $rules = [

    ];


}
