<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article List</title>
</head>
<body>

<div>
    @foreach($articles as $article)
        <div>
            <h2>{{ $article['title'] }}</h2>
            <p>{!! $article['body'] !!}</p>
        </div>
    @endforeach
</div>

</body>
</html>
