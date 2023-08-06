@extends("layouts.app-moha")

@section("title") Edit @endsection

@section("contents")
    <form class="grid grid-2col form" method="post" action="/posts/{{ $id }}">
        @csrf
        @method("PUT")

        Title <input type="text" name="title" value="{{ $title }}" required>
        Description <textarea name="description" required>{{ $description }}</textarea>
        <input class="col-2 submit" type="submit" value="Edit"/>
    </form>

    @foreach($errors->all() as $error)
        {{ $error }}
    @endforeach
@endsection
