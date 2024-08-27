<?php

declare(strict_types=1);

namespace Gildsmith\HubApi\Actions;

use Gildsmith\HubApi\Models\Language;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Action;

// todo
class ReadLanguages extends Action
{
    public function authorize(Request $request): bool
    {
        return $request->user() && $request->user()->role->name === 'admin';
    }

    public function handle(): Collection
    {
        return Language::all();
    }
}
