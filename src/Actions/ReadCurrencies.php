<?php

namespace Gildsmith\HubApi\Actions;

use Gildsmith\HubApi\Models\Currency;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Action;

// todo valdate?
class ReadCurrencies extends Action
{
    public function authorize(Request $request): bool
    {
        return (bool) $request->user() && $request->user()->role->name === 'admin';
    }

    public function handle(): Collection
    {
        return Currency::all();
    }
}