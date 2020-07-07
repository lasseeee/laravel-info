@extends('layouts.app')

@section('title', __('Terms of service'))

@section('content')
<div class="container">
    <h1>
        @lang('Terms of service')
    </h1>

    {!!  Markdown::convertToHtml($slot) !!}
</div>
@endsection
