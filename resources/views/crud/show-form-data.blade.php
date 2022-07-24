<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" /> 
    <title>Form data show</title>
</head>
<body>
    <h style="color:orange" >Form  listing</h>
    @if(session("delete-message"))
    <div class="alert alert-success">
      <p>  {{session("delete-message")}}  </p>
   </div>
   @endif

  
    <div class="tables" >
    <table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Detail</th>
    <th > Edit</th>
    <th > Delete</th>
  </tr>
  @foreach($showData as $listing)
  <tr>

    <td>{{$listing->name}}</td>
    <td>{{$listing->email}}</td>
    <td>{{$listing->detail}}</td>
    <td><a href="edit-page/{{$listing->id}}"> <i class="fas fa-edit"></i> </a></td>
    <td><a href="{{route('deleting',['id'=>$listing->id])}}" ><i class="fas fa-trash"></i> </a></td>
  </tr>
  @endforeach
</table>
     </div>
    
</body>
</html>