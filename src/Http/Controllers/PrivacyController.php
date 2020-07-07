<?php

namespace Lasseeee\Info\Http\Controllers;

class PrivacyController extends Controller
{
    public function __invoke()
    {
        return view()->exists('info::' . config('app.locale') . '.privacy') ?
        view('info::' . config('app.locale') . '.privacy') :
        view('info::nb.privacy');
    }
}
