<?php

namespace Lasseeee\Info\Http\Controllers;

class TermsController extends Controller
{
    public function __invoke()
    {
        return view()->exists('info.' . config('app.locale') . '.terms') ?
        view('info.' . config('app.locale') . '.terms') :
        view('info::nb.terms');
    }
}
