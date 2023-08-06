@extends("layouts.app-moha")

@section("title")
    Create Post
@endsection

@section("contents")
<main class="flex flex-center flex-column">
    <h1>Create New Post</h1>

    <form class="grid grid-2col form" method="post" action="/posts">
        @csrf

        Title <input type="text" name="title">
        Description <textarea name="description"></textarea>
        <input class="col-2 submit" type="submit" value="Create"/>
    </form>
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    @endif
</main>
@endsection

