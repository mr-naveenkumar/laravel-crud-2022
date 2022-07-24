<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form page</title>
</head>
<body>
    <h style="color:blue">Form insert page  </h>
    @if(session("message"))
    <div class="alert alert-success">
       <p> {{session("message")}} </p>
    </div>
    @endif
<div class="form" >
<form method="post" action="{{route('post.form')}}" enctype="multipart/form-data" >
    @csrf
    <label> Name: </label> <input type="text" name="name" /> <br><br>
    <label> Email: </label> <input type="email" name="email" /> <br><br>
    <label> Detail: </label> <input type="text" name="detail" /> <br><br>
    <label > Submit Link</label> <input type="submit" />

</form>
</div>
</body>
</html>