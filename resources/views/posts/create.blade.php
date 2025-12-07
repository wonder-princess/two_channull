<!-- resources/views/posts/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>新規投稿</title>
</head>
<body>
    <h1>新規投稿</h1>

    <form action="{{ route('posts.store') }}" method="post">
        @csrf

        <div>
            <label for="display_name">名前</label>
            <input type="text" name="display_name" id="display_name" value="{{ old('display_name') }}">
            @error('display_name')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="post_text">本文</label>
            <textarea name="post_text" id="post_text">{{ old('post_text') }}</textarea>
            @error('post_text')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">投稿する</button>
    </form>
</body>
</html>
