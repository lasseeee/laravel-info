<?php

namespace Lasseeee\Info\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UnderstandController extends Controller
{
    public function __invoke()
    {
        if (Auth::guest()) {
            return redirect()->route('home');
        }

        Auth::user()->inform();

        flash()->success(trans('info::messages.understood'));

        return back();
    }
}
