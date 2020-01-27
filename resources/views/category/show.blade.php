<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
Name: {{$article->title}}
<hr>
Body: {{$article->body}}
<hr>
Source: {{$article->source}}

<hr>
<h4>Categories</h4>
<ul>
    @foreach($article->categories as $category)
        <li>{{$category->name}}</li>
    @endforeach
</ul>
<hr>
<h4>Comments</h4>
<h5>Your Comment</h5>
<form action="../article/{{$article->id}}/comment" method="post">
    @csrf
    Name: <input type="text" autofocus name="author" id=""><br><br>
    Comment: <textarea name="body" id="" cols="30" rows="10"></textarea><br><br>
    <input type="submit">
</form>

<hr>
@foreach($article->comments as $comment)
    <strong style="color: forestgreen">{{$comment->author}}:</strong> {{$comment->body}}<br>
@endforeach
</body>
</html>
