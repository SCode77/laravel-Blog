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
{{--hello <br>{{"$user[name] ". " $user[family]  " . "with age $user[age]"}}--}}
<form action="newsletter" method="post">
    @csrf
    Name: <input type="text" autofocus name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    <input type="submit">
</form>
</body>
</html>
