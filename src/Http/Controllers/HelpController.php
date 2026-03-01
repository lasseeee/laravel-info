<?php

namespace Lasseeee\Info\Http\Controllers;

class HelpController extends Controller
{
    public function __invoke()
    {
        return view()->exists('info.' . config('app.locale') . '.help') ?
        view('info.' . config('app.locale') . '.help') :
        view('info::nb.help');
    }
}
