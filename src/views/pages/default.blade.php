@extends('layouts.main')

@section('content')
    <h1>{{ $post->post_title }}</h1>
    <div>{!! $post->post_content !!}<div>
    <x-button type="primary">
        Click me
    </x-button>
@stop