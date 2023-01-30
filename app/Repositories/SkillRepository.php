<?php

namespace App\Repositories;

use App\Models\Skill;

class SkillRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'title',
        'body'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Skill::class;
    }
}
