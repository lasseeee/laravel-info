@extends('layouts.app')

@section('title', __('What\'s new'))

@section('content')
<div class="container">
    <h1>
        @lang('What\'s new')
    </h1>

    {!!  Markdown::convertToHtml($slot) !!}
</div>
@endsection
