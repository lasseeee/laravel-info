<?php

namespace Lasseeee\Info\Http\Controllers;

class FAQController extends Controller
{
    public function __invoke()
    {
        return view()->exists('info::' . config('app.locale') . '.faq') ?
        view('info::' . config('app.locale') . '.faq') :
        view('info::nb.faq');
    }
}
