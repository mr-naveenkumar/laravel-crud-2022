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

    @if(session("update-message"))
   <div class="alert alert-success" >
      <p> {{session("update-message")}}  </p>
     </div>
     @endif
<div class="form" >
   
<form method="post" action="{{route('post.update')}}" enctype="multipart/form-data" >
    @csrf
    <input type="hidden"   name="id" value="{{$data->id}}" > 
    <label> Name: </label> <input type="text" name="name"  value="{{$data->name}}" > 
    @error("name")
    <div class="alert alert-danger">
  <p> {{$message}}  </p>
     </div>
     @enderror
    <br><br>
    <label> Email: </label> <input type="email" name="email" value="{{$data->email}}"/> 
    @error("email")
    <div class="alert alert-danger">
  <p> {{$message}}  </p>
     </div>
     @enderror<br><br>
    <label> Detail: </label> <input type="text" name="detail" value="{{$data->detail}}"/> 
    @error("detail")
    <div class="alert alert-danger">
  <p> {{$message}}  </p>
     </div>
     @enderror<br><br>
    <label > Submit Link</label> <input type="submit" />

</form>
</div>
</body>
</html>