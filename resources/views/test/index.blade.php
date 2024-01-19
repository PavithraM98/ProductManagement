<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="text-center">
          <h1>  Daily Task</h1>
          <div class="row">
                    <div class="col-md-12">


                    <!-- @foreach($errors->all() as $error)

                     <div class="alert alert-danger" role="alert">
                        {{$error}}
                     </div>

                    @endforeach -->

                        <form method="post" action="">
                            {{csrf_field()}}
                            
                           <!-- <input type="text" class="form-control" name="title" placeholder="enter your title"> -->
                           
                           <br>
                           <!-- <img src="img_girl.jpg" alt="Girl in a jacket" width="500" height="600"> -->
                           
                           <input type="submit" class="btn btn-primary" value="Create">
                           <!-- <input type="button" class="btn btn-warning" value="CLEAR"> -->
                            <br>  
                        </form>
                        
                        <table class="table table-dark">
                            <th>ID</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Description</th>
                            <!-- <th>COMPLETED</th> -->
                            <!-- <th>Action</th> -->

                            @foreach($tests as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->title}}</td>
                                <td>{{$data->price}}</td>
                                <td>{{$data->description}}</td>
                                <!-- <td>
                                    @if($data->incompleted)
                                    <button class="btn btn-success btn-xs">Completed
                                    </button>
                                    @else
                                    <button class="btn btn-warning btn-xs">In Completed
                                    </button>
                                    @endif
                                </td> -->
                                <!-- <td>
                                @if($data->incompleted)
                                <a href="/markasincompleted/{{$data->id}}" class="btn btn-secondary">Mark As Incompleted</a>
                                @else
                                <a href="/markascompleted/{{$data->id}}" class="btn btn-primary">Mark As Completed</a>
                                @endif
                                <a href="/taskDelete/{{$data->id}}" class="btn btn-danger">Delete</a>
                                <a href="/taskUpdate/{{$data->id}}" class="btn btn-info">Update</a>
                                </td> -->
                             </tr>
                            @endforeach
                        </table>

                    </div>
          </div>
        </div>
    </div>
</body>
</html>