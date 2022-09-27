<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>login page</h1>
    <form method="post" action="/login/">
    {{ csrf_field() }}
        <input type="email" name="email" placeholder="Enter your Email">
        <input type="password" name="password" placeholder="Enter your Password">
        <button type="submit" name="submit" >Sign-In</button>
    </form>
</body>
</html>