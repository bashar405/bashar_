<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/contact" method="post">

        @csrf
        <input type="text" name="name" id="name">

        <input type="submit" value="send">

    </form>
    @if (isset($name))
        hello,{{ $name }}
    @endif
</body>

</html>
