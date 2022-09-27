<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Free Adds</h1>
    <form method="post" action="/adds/" enctype = "multipart/form-data">
    @csrf
        <input type="text" name="name" placeholder="Enter your add ^^">
        <input type="number" name="price" placeholder="Enter the add price">
        <input type="text" name="desc" placeholder="Describe your add ^^">
        <input type="file" name="picture" id="picture" >
        <button type="submit" name="submit">My add</button>
       </form>
</body>
</html>