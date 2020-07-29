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
                ' <a href="' . route('info.terms', $request->tenant) . '" style="color:#fff;text-decoration:underline!important;">' .
                trans('info::messages.terms') .
                '</a> ' .
                trans('info::messages.and') .
                ' <a href="' . route('info.privacy', $request->tenant) . '" style="color:#fff;text-decoration:underline!important;">' .
                trans('info::messages.privacy') .
                '</a>. ' .
                trans('info::messages.agree') .
                ' <a href="' . route('info.understand', $request->tenant) . '" class="btn btn-xs btn-primary margin-left">' .
                trans('info::messages.understand') .
                '</a>' .
                ' <a href="' . route('info.faq', $request->tenant) . '" class="btn btn-xs btn-default margin-left">' .
                trans('info::messages.more') .
                '</a>'
            )
            ->important();
        }

        return $next($request);
    }
}
