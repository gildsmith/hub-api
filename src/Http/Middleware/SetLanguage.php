<?php

declare(strict_types=1);

namespace Gildsmith\CoreApi\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLanguage
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->has('lang')) {
            $lang = $request->query('lang');
            App::setLocale($lang);
        }

        return $next($request);
    }
}
