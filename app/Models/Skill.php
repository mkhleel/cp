<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Skill extends Model
{
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'category_id'
    ];

//    protected $casts = [
//        'published' => 'boolean',
//    ];

    public static array $rules = [
        'title' => 'required|string|min:8|max:255',
        'body' => 'nullable|string',
//        'image' => 'required',
//        'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
        );
    }



}
