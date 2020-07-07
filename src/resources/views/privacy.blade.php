@extends('layouts.app')

@section('title', __('Privacy'))

@section('content')
<div class="container">
    <h1>
        @lang('Privacy policy')
    </h1>

    {!!  Markdown::convertToHtml($slot) !!}
</div>
@endsection
