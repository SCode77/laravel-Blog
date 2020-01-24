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
<h3><a style="color: whitesmoke" href="article/create">Create Article</a></h3>
<table>
    @foreach($articles as $article)
        <tr>
            <td>{{$article->id}}</td>
            <td><a href="article/{{$article->id}}">{{$article->title}}</a></td>
            <td>{{$article->body}}</td>
            <td><a href="article/{{$article->id}}/edit">
                    <button>Edit</button>
                </a></td>
            <td>
                <form action="article/{{$article->id}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
{{$articles->links()}}
<style>
    .pagination {
        list-style: none;
    }

    .pagination li {
        float: left;
        margin: 5px;
    }
</style>
</body>
</html>
