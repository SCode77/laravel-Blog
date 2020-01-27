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
<h3><a style="color: whitesmoke" href="{{route('category.create')}}">Create Category</a></h3>

<table>
    @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td><a href="{{'category/'.$category->id}}">{{$category->name}}</a></td>
            <td>{{$category->body}}</td>
            <td><a href="{{route('category.edit', $category->id)}}">
                    <button>Edit</button>
                </a></td>
            <td>
                <form action="{{route('category.destroy', $category->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
{{$categories->links()}}
<style>
    .pagination {
        list-style: none;
    }

    .pagination li {
        float: left;
        margin: 5px;
    }
</style>
<br>
<h4><a style="color: whitesmoke" href="article">Articles</a></h4>

</body>
</html>
