@extends('layouts.master')

@section('content')
    <h1>The details of the post is going to be displayed here</h1>

    @foreach($posts as $post)
        {{$post->id}}
    @endforeach
@endsection

@section('footer')

@endsection