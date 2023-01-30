<?php

namespace App\Http\Controllers\Admin\Skills;

use App\Actions\Skills\CreateSkill;
use App\Http\Controllers\Controller;
use App\Http\Requests\Skills\StoreRequest;
use Illuminate\Http\RedirectResponse;

class StoreController extends Controller
{

    public function __construct(
        protected CreateSkill $action,
    ) {}

    public function __invoke(StoreRequest $request): RedirectResponse
    {

        $this->action->handle(
            request: $request->all(),
            client_id: auth()->id(),
        );

        return redirect()->route('dashboard');
    }

}
