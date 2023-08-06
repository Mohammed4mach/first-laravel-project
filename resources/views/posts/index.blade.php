@extends("layouts.app-moha")

@section("title")
Posts
@endsection

@section("contents")
<table cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Created at</th>
        <th>updated by</th>
        <th>Username</th>
    </tr>
    @foreach($posts as $post)
        <tr>
            <td><a class="font-large" href="/posts/{{ $post["id"] }}">{{ $post["id"] }}</a></td>
            <td>{{ $post["title"] }}</td>
            <td>{{ $post["created_at"] }}</td>
            <td>{{ $post["updated_at"] }}</td>
            <td>{{ $post["user"]["name"] }}</td>
            <td><a class="btn btn-main" href="/posts/{{ $post["id"] }}/edit/">Edit</a></td>
            <td>
                <form action="/posts/{{ $post["id"] }}" method="post">
                    @csrf
                    @method("DELETE")
                    <input class="btn btn-danger" type="submit" value="Delete" />
                </form>
            </td>
        </tr>
    @endforeach
</table>
<a class="btn btn-create" href="/posts/create">Add Post</a>
@endsection
