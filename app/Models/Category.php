<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{

    public $fillable = [
        'title',
        'slug',
        'icon'
    ];

    public static array $rules = [
        'title' => 'required|string|min:8|max:255',
        'slug' => 'required|unique:categories',
    ];


    public function skills(): HasMany
    {
        return $this->hasMany(
            related: Skill::class,
        );
    }

}
