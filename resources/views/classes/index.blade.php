<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>


<body>

<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
                <a class="navbar-brand" href="/">ZiK</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Data Bases
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="spells">Spell Data Base</a></li>
                        <li><a class="dropdown-item" href="classes">Class Data Base</a></li>
                        <li><a class="dropdown-item" href="subclasses">Subclasses Data Base</a></li>
                        <li><a class="dropdown-item" href="backgrounds">Background Data Base</a></li>
                        <li><a class="dropdown-item" href="races">Race Data Base</a></li>
                        <li><a class="dropdown-item" href="feats">Feat Data Base</a></li>
                        <li><a class="dropdown-item nav-link disabled" href="#">Item Data Base</a></li>
                        @if ($is_logged_in == 1)
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="characters">Characters Data Base</a></li>
                        @endif
                        @if ($is_logged_in == 1)
                            @if ($user -> is_admin == 1)
                                <li><a class="dropdown-item" href="users">All Users</a></li>
                            @endif
                        @endif
                        <!--<li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>-->
                    </ul>
                    </li>
                    <!-- <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                    </li> -->

                    @if ($is_logged_in == 1)
                        @if ($user -> is_admin == 1)
                            <li class="nav-item">
                            <a class="nav-link" href="classes/createClass">New Class</a>
                        @endif
                    @endif
                    </li>
                </ul>

                
                <!--<form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>-->
            </div>
        </div>

        @if ($is_logged_in == 1)
            <ul class="nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"> 
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="profile">Profile</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <a class="dropdown-item" href="#">{{ __('Log Out') }}</a>
                                </dropdown-link>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        @elseif ($is_logged_in == 0)
            <ul class="nav">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/register">Register</a>
                    </li>
                </div>
            </ul>
        @endif
</nav>


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
        </div>
    </div>
</div>

<div class="form-group">
    <div class="container-sm">    
    </div> 

    <div class="container-lg">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Class Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classes as $class)
                <tr>
                    <th scope="row" class="col-md-1">{{$class->id}}</th>
                    <td>{{$class->class_name}}</td>

                    @if ($is_logged_in == 1)
                        @if ($user -> is_admin == 1)
                            <td class="col-md-1"><a class="btn d-grid gap-2 btn-primary btn-rounded btn-sm fw-bold" href="{{ route('classes.editClass',$class->id) }}">Edit</a></td>
                            <td class="col-md-1"><a class="btn d-grid gap-2 btn-danger btn-rounded btn-sm fw-bold" href="{{ route('classes.deleteClass',$class->id) }}" onclick="return confirm('Are you sure you want to delete {{$class->class_name}}? \nThis action is permananet and non-reversable.')">Delete</a></td>
                        @endif
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

    <div class="container-sm">    
    </div> 
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
