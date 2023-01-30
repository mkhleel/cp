<?php
namespace App\Actions\Skills;

use App\Models\Skill;

class CreateSkill
{
    public function handle(array $request, int $client_id): void
    {
        $skill = Skill::query()->create([
            'title' => $request['title'],
            'body' => $request['body'],
            'user_id' => $client_id,
        ]);
    }
}
