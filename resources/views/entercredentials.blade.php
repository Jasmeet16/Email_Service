<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Enter the credentials</h1>
    <form action="/entercredentials" method="post">
        @csrf
        <label for="input">Enter Email  </label> <input type="text" name="email">
        <br>
        <label for="password">Password  </label><input type="password" name="password">
        <button type="submit" style="display: block">Submit</button>
    </form>
</body>
</html>