<!-- resources/views/posts/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>投稿一覧</title>
</head>
<body>
    <h1>投稿一覧</h1>

    <p>
        <a href="{{ route('posts.create') }}">新規投稿</a>
    </p>

    @if ($posts->isEmpty())
        <p>投稿はまだありません。</p>
    @else
        <ul>
            @foreach ($posts as $post)
                <li>
                    <strong>{{ $post->display_name }}</strong><br>
                    {{ $post->post_text }}<br>
                    <small>{{ $post->created_at }}</small>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
