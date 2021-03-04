<?php

namespace Lasseeee\Info\Http\Middleware;

use Closure;

class Inform
{
    /**
    * Handle an incoming request.
    */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->isNotInformed()) {
            flash()->info(
                trans('info::messages.updated') .
                ' <a href="' . route('info.privacy') . '" style="color:#fff;text-decoration:underline!important;">' .
                trans('info::messages.privacy') .
                '</a>. ' .
                trans('info::messages.agree') .
                ' <a href="' . route('info.understand') . '" class="btn btn-xs btn-primary margin-left">' .
                trans('info::messages.understand') .
                '</a>'
            )
            ->important();
        }

        return $next($request);
    }
}
