<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Characters</title>
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
                        <li><a class="dropdown-item" href="#">Item Data Base</a></li>
                        <!--<li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>-->
                    </ul>
                    </li>
                    <!-- <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                    </li> -->

                    <li class="nav-item">
                        <a class="nav-link" href="characters/createCharacter">New Character</a>
                    </li>
                </ul>

                
                <!--<form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>-->
            </div>
        </div>
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
                <th scope="col">Character Name</th>
                <th scope="col">Class</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($characters as $character)
                <tr>
                    <th scope="row" class="col-md-1">{{$character->id}}</th>
                    <td><a href="characters/showSheet/{{ $character->id }}">{{ $character->character_name }}</a></td>
                    <td>{{ $character->class_name }}</td>

                    
                    <td class="col-md-1"><a class="btn d-grid gap-2 btn-primary btn-rounded btn-sm fw-bold" href="{{ route('characters.editCharacter',$character->id) }}">Edit</a></td>
                    <td class="col-md-1"><a class="btn d-grid gap-2 btn-danger btn-rounded btn-sm fw-bold" href="{{ route('characters.deleteCharacter',$character->id) }}" onclick="return confirm('Are you sure you want to delete {{$character->character_name}}? \nThis action is permananet and non-reversable.')">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

    <div class="container-sm">    
    </div> 
</div>

<?php
/*@if ($Array[1] == 1)
    <td>
        <form method="GET" action="{{ route('auth.TakeSpell',$user->id) }}">
            <input type="hidden" name="user_name" value="{{$user->name}}">
            <input type="hidden" name="user_email" value="{{$user->email}}">
            <input type="hidden" name="role" value="{{$Array[0]}}">
            <button class="btn btn-danger customButtonWidthAdminPanel">Remove Spell</button>
        </form>
    </td>
@elseif ($Array[1] == 0)
    <td>
        <form method="GET" action="{{ route('admin.GiveSpell',$user->id) }}">
            <input type="hidden" name="user_name" value="{{ $user->name }}">
            <input type="hidden" name="user_email" value="{{ $user->email }}">
            <input type="hidden" name="role" value="{{$Array[0]}}">
            <button class="btn btn-success customButtonWidthAdminPanel">Add Spell</button>
        </form>
    </td>
@endif*/
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>