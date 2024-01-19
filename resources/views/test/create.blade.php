<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Update Task</title>
</head>
<body>
    <div class="container">
        <div class="text-center">
          <h1>Test Create</h1>
          <div class="row">
                    <div class="col-md-12">


                    <!-- @foreach($errors->all() as $error) -->

                     <!-- <div class="alert alert-danger" role="alert"> -->
                        <!-- {{$error}} -->
                     <!-- </div> -->

                    <!-- @endforeach -->

                        <form class="form-ad" action="{{route('test.store')}}" method="POST"   enctype="multipart/form-data">
                        {{method_field('post')}}
                         @csrf
                            <div class="row">
                              <div class="col-md-4">
                                  <label class="form-label">Title:</label>
                                  <input type="text" class="form-control" name="title"><br><br>
                              <!-- </div> -->
                              <!-- <div class="col-md-4">     -->
                                  <label class="form-label">Price:</label>
                                  <input type="number" class="form-control" name="price"><br><br>
                               <!-- </div> -->
                               <!-- <div class="col-md-4"> -->
                                  <label class="form-label">Description:</label>
                                  <textarea  type="text" name="discription" rows="4" cols="50"></textarea><br><br><br>
                               </div>
                            </div>
                           <!-- <input type="submit" class="btn btn-primary" value="Save"> -->
                           <button type="submit" value="submit">Submit</button>
                           <input type="button" class="btn btn-warning" value="CANCEL">
                            <br>  
                        </form>
                        
                        

                    </div>
          </div>
        </div>
    </div>
</body>
</html>