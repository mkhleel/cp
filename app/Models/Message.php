<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    public $fillable = [
        'user_id',
        'freelancer_id',
        'skill_id',
        'body',
        'read'
    ];


    public static array $rules = [
        'body' => 'required',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
        );
    }


}
