<?php

namespace Lasseeee\Info\Http\Controllers;

class UnderstandController extends Controller
{
    public function __invoke()
    {
        auth()->user()->inform();

        flash()->success(trans('info::messages.understood'));

        return back();
    }
}
