<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello {{ Auth::user()->name }}</h1>
    {{ csrf_field() }}

    <form action="/profile/" method="POST">
                    @csrf
                       <div class="form-group">
                           <label for="name"><strong>Name:</strong></label>
                           <input type="text" class="form-control" id ="name" name="name" value="{{Auth::user()->name}}">
                       </div>
                        <div class="form-group">
                           <label for="email"><strong>Email:</strong></label>
                           <input type="text" class="form-control" id ="email" value="{{Auth::user()->email}}" name="email">
                       </div>
                        <button class="btn btn-primary" type="submit">Update Profile</button>
                   </form>
                   <form method="get" action="/delete/{{ Auth::user()->id }}">
                    <button type="submit" name="delete">Delete account</button>
                   </form>

                <a href='/adds/'>Go to my advert</a>
</body>
</html>