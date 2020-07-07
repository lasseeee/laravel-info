@extends('layouts.app')

@section('title', __('Frequently asked questions'))

@section('content')
<div class="container">
    <h1>
        @lang('Frequently asked questions')
    </h1>

    {!!  Markdown::convertToHtml($slot) !!}
</div>
@endsection
