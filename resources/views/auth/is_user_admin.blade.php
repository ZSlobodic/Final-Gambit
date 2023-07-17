<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Admin Privileges</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>

    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
                    <a class="navbar-brand" href="#">ZiK</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <!-- <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                        </li> -->

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('auth.users') }}">Back</a>
                        </li>
                    </ul>

                    
                    <!--<form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>-->
                </div>
            </div>
    </nav>

    <!--<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Race</h2>
            </div>
        </div>
    </div>-->

    @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Warning!</strong>Please check your fields.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif

    <form action="{{ route('users.HowToAdmin',$users->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <div class="container-sm">    
            </div>

            <div class="container-lg">

            @if($users->is_admin == 0)
            <div class="form-group">
                <label for="reference">Edit Admin privileges: </label>
                <input type='hidden' value='0' name='is_admin'>
                <input type="checkbox" id="is_admin" name="is_admin" value="1">
            </div>
            @elseif($users->is_admin == 1)
            <div class="form-group">
                <label for="reference">Edit Admin privileges: </label>
                <input type='hidden' value='0' name='is_admin'>
                <input type="checkbox" id="is_admin" name="is_admin" value="1" checked>
            </div>
            @endif
            
            <button type="submit" class="btn btn-success btn-block">Save</button>
            </div>
        
            <div class="container-sm">    
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
