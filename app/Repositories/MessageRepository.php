<?php

namespace App\Repositories;

use App\Models\Message;
use App\Repositories\BaseRepository;

class MessageRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'skill_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Message::class;
    }
}
