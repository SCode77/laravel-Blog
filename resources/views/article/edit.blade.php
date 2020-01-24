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
<form action="../{{$article->id}}" method="post">
    @csrf
    @method('put')
    Title: <input type="text" autofocus name="title" value="{{$article->title}}"><br><br>
    Body: <textarea name="body" cols="30" rows="10">{{$article->body}}</textarea><br><br>
    Source: <input type="text" name="source" value="{{$article->source}}"><br><br>
    <input type="submit">
</form>
</body>
</html>
