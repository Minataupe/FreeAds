<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register Page</h1>
    <form method="post" action='/register/'>
    {{ csrf_field() }} 
    <input type="text" name="name" id="name" placeholder="Enter your Name">
    <input type="email" name="email" id="email" placeholder="Enter your Email">
    <input type="password" name="password" id="password" placeholder="Enter your Password">
    <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>