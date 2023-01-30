<?php

namespace App\Repositories;

use App\Models\Review;
use App\Repositories\BaseRepository;

class ReviewRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'skill_id',
        'rating',
        'message'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Review::class;
    }
}
