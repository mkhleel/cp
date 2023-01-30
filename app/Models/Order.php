<?php

namespace App\Models;

use App\Enums\OrdersStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{

    public $fillable = [
        'skill_id',
        'status'
    ];

    protected $casts = [
        'status' => OrdersStatus::class
    ];

    public static array $rules = [
        'skill_id' => 'required'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
        );
    }

    public function skill(): BelongsTo
    {
        return $this->belongsTo(
            related: Skill::class,
        );
    }


}
