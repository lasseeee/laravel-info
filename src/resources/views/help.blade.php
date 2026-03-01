@extends('layouts.app')

@section('title', __('Help'))

@section('content')
<div class="container">
    <h1>
        @lang('Help')
    </h1>

    {!!  Markdown::convertToHtml($slot) !!}
</div>
@endsection
