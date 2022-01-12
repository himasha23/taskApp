<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="text-center">
          <h2>  Daily Task </h2>
          <div class="row">
              <div class="col-md-12">

              @foreach($errors->all() as $error)

              <div class="alert alert-danger" role="alert">
                {{$error}}
</div>
              @endforeach


                  <form method="post" action="/saveTask">
                    {{csrf_field()}}

                  <input type="text" class="form-control" name="task" placeholder="Enter your Task">
                  <br>
                  <input type="submit" class="btn btn-primary" value="save">
                  <input type="button" class="btn btn-danger" value="delete">
</form>
                  <br>
                  <table class="table table-dark">
                      <th>ID</th>
                          <th>task</th>
                              <th>completed</th>

                              @foreach($tasks as $task)
                                  <tr>
                                      <td>{{$task->id}}</td>
                                          <td>{{$task->task}}</td>
                                          <td>{{$task->iscompleted}}</td>
                                        </tr>
                                        @endforeach
</div>
</div>
</body>
</html>