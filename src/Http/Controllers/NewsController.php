<?php

namespace Lasseeee\Info\Http\Controllers;

class NewsController extends Controller
{
    public function __invoke()
    {
        return view()->exists('info::' . config('app.locale') . '.news') ?
        view('info::' . config('app.locale') . '.news') :
        view('info::nb.news');
    }
}
