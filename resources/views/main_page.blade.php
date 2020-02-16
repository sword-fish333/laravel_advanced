<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <div class="jumbotron text-center bg-dark text-white">
        <h1>Mastery</h1>
    </div>
    <div class="row">
        <div class="col-lg-6 offset-3">
        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
            @endforeach

        @endif
        </div>
        <div class="col-lg-6 offset-3">
        @php
        $task=new \App\Http\Controllers\Task('Become stronger');
      $tasks=[
      new \App\Http\Controllers\Task('Become stronger 1'),
      new \App\Http\Controllers\Task('Become stronger 2'),
      ];
      var_dump($tasks);

        @endphp
            <form action="form" method="post">
                @csrf
                @captcha

                <div class="form-group">
                    <input type="text"  name="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="email"  name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="submit"  value="save" class="btn btn-success btn-block">
                </div>
            </form>
        </div>
    </div>
</div>
<script
        src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
        crossorigin="anonymous"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
//    $(document).ready(function(){
//        $('form').submit()
//    })
</script>
</body>
</html>