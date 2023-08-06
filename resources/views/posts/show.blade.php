@extends("layouts.app-moha")

@section("contents")
    <h1 align="center">{{ $post->title }}</h1>
    <div class="width-full">
        <code>{{ $post->user->name }}</code><br>
        <code>Created at: {{ $post->created_at }}</code><br>
        <code>Updated at: {{ $post->updated_at }}</code>
    </div>
    <p class="margin-top-35" align="center">{{ $post->description }}</p>
@endsection
