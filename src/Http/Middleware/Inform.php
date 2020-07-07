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
                trans('We have updated our') .
                ' <a href="' . route('info.terms', $request->tenant) . '" style="color:#fff;text-decoration:underline!important;">' .
                trans('terms of service') .
                '</a> ' .
                trans('and') .
                ' <a href="' . route('info.privacy', $request->tenant) . '" style="color:#fff;text-decoration:underline!important;">' .
                trans('privacy policy') .
                '</a>. ' .
                trans('By continued use of this system, you agree to these.') .
                ' <a href="' . route('info.understand', $request->tenant) . '" class="btn btn-xs btn-primary margin-left">' .
                trans('I understand') .
                '</a>' .
                ' <a href="' . route('info.faq', $request->tenant) . '" class="btn btn-xs btn-default margin-left">' .
                trans('Learn more') .
                '</a>'
            )
            ->important();
        }

        return $next($request);
    }
}
