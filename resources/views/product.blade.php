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
@if(Session::has('server-message'))
    <strong style="color: #00fffc">{{Session::get('server-message')}}</strong>
    @endif
<br><br>
<form action="product" method="post">
    @csrf
    Name: <input type="text" autofocus name="name"><br><br>
    Price: <input type="text" name="price"><br><br>
    Date: <input type="text" name="date"><br><br>
    <input type="submit">
</form>
<span>All Data: <b>| <span style="color: orangered">{{$products->count()}}</span> |</b> </span>
<table>
    <tr style="color: orange">
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Date</th>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->date}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
