<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spells</title>
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
                        <a class="nav-link" href="spells/createSpell">New Spell</a>
                    </li>
                </ul>

                
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
</nav>


<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Filter
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Filter</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <div class="modal-body">
        
        <form action="{{ url('/spells/'. $shown_spell->id) }}" method="GET">
        @csrf
        
        <label for="reference">Class: </label>
        @foreach ($classes as $class)
        <label for="reference">{{$class->class_name}}</label>
        <input type="checkbox" class="form-control" name ="class[]" value="{{$class->class_name}}">
        @endforeach
        <br>
        <label for="reference">Subclass: </label>
        @foreach ($subclasses as $subclass)
        <label for="reference">{{$subclass->subclass_name}}</label>
        <input type="checkbox" class="form-control" name ="{{$subclass->subclass_name}}">
        @endforeach
        <br>
        <label for="reference">Race: </label>
        @foreach ($races as $race)
        <label for="reference">{{$race->race_name}}</label>
        <input type="checkbox" class="form-control" name ="{{$race->race_name}}">
        @endforeach
        <br>
        <label for="reference">Background: </label>
        @foreach ($backgrounds as $background)
        <label for="reference">{{$background->background_name}}</label>
        <input type="checkbox" class="form-control" name ="{{$background->background_name}}">
        @endforeach
        <br>
        <label for="reference">Feat: </label>
        @foreach ($feats as $feat)
        <label for="reference">{{$feat->feat_name}}</label>
        <input type="checkbox" class="form-control" name ="{{$feat->feat_name}}">
        @endforeach

        <br>
        <button type="submit" class="btn btn-success btn-block">Filter</button>


        </form>

    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<!--<form action="{{ url('/spells/'. $shown_spell->id) }}" method="GET">
    @csrf
    
    <label for="reference">Class: </label>
    @foreach ($classes as $class)
    <label for="reference">{{$class->class_name}}</label>
    <input type="checkbox" class="form-control" name ="class[]" value="{{$class->class_name}}">
    @endforeach
    <br>
    <label for="reference">Subclass: </label>
    @foreach ($subclasses as $subclass)
    <label for="reference">{{$subclass->subclass_name}}</label>
    <input type="checkbox" class="form-control" name ="{{$subclass->subclass_name}}">
    @endforeach
    <br>
    <label for="reference">Race: </label>
    @foreach ($races as $race)
    <label for="reference">{{$race->race_name}}</label>
    <input type="checkbox" class="form-control" name ="{{$race->race_name}}">
    @endforeach
    <br>
    <label for="reference">Background: </label>
    @foreach ($backgrounds as $background)
    <label for="reference">{{$background->background_name}}</label>
    <input type="checkbox" class="form-control" name ="{{$background->background_name}}">
    @endforeach
    <br>
    <label for="reference">Feat: </label>
    @foreach ($feats as $feat)
    <label for="reference">{{$feat->feat_name}}</label>
    <input type="checkbox" class="form-control" name ="{{$feat->feat_name}}">
    @endforeach

    <br>
    <button type="submit" class="btn btn-success btn-block">Filter</button>


</form>-->

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
        </div>
    </div>
</div>
                <!--<th scope="row">{{ $shown_spell->id}}</th>
                <td>{{$shown_spell->spell_name}}</td>
                <td>{{$shown_spell->school}}</td>
                <td>{{$shown_spell->level}}</td>
                <td>{{$shown_spell->ritual}}</td>
                <td>{{$shown_spell->casting_time}}</td>
                <td>{{$shown_spell->range}}</td>
                <td>{{$shown_spell->target}}</td>
                <td>{{$shown_spell->somatic}}</td>
                <td>{{$shown_spell->vocal}}</td>
                <td>{{$shown_spell->material}}</td>
                <td>{{$shown_spell->components}}</td>
                <td>{{$shown_spell->concentration}}</td>
                <td>{{$shown_spell->duration}}</td>
                <td>{{$shown_spell->description}}</td>
                <td>{{$shown_spell->at_higher_levels}}</td>-->


<div class="card">
  <div class="card-body">
  <th scope="row">{{ $shown_spell->id}}</th>
                <td>{{$shown_spell->spell_name}}</td>
                <td>{{$shown_spell->school}}</td>
                <td>{{$shown_spell->level}}</td>
                <td>{{$shown_spell->ritual}}</td>
                <td>{{$shown_spell->casting_time}}</td>
                <td>{{$shown_spell->range}}</td>
                <td>{{$shown_spell->target}}</td>
                <td>{{$shown_spell->somatic}}</td>
                <td>{{$shown_spell->vocal}}</td>
                <td>{{$shown_spell->material}}</td>
                <td>{{$shown_spell->components}}</td>
                <td>{{$shown_spell->concentration}}</td>
                <td>{{$shown_spell->duration}}</td>
                <td>{{$shown_spell->description}}</td>
                <td>{{$shown_spell->at_higher_levels}}</td>
  </div>
</div>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Spell Name</th>
            <th scope="col">School</th>
            <th scope="col">Level</th>
            <th scope="col">Ritual</th>
            <th scope="col">Casting Time</th>
            <th scope="col">Range</th>
            <th scope="col">Target</th>
            <th scope="col">Somatic</th>
            <th scope="col">Vocal</th>
            <th scope="col">Material</th>
            <th scope="col">Components</th>
            <th scope="col">Concentration</th>
            <th scope="col">Duration</th>
            <th scope="col">Description</th>
            <th scope="col">At Higher Levels</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($spells as $spell)
            <tr>
                <th scope="row">{{ $spell->id}}</th>
                <td><a href = "{{ route('spells.showSpell',$spell->id) }}">{{$spell->spell_name}}</td>
                <td>{{$spell->school}}</td>
                <td>{{$spell->level}}</td>
                <td>{{$spell->ritual}}</td>
                <td>{{$spell->casting_time}}</td>
                <td>{{$spell->range}}</td>
                <td>{{$spell->target}}</td>
                <td>{{$spell->somatic}}</td>
                <td>{{$spell->vocal}}</td>
                <td>{{$spell->material}}</td>
                <td>{{$spell->components}}</td>
                <td>{{$spell->concentration}}</td>
                <td>{{$spell->duration}}</td>
                <td>{{$spell->description}}</td>
                <td>{{$spell->at_higher_levels}}</td>

                <td><a class="btn d-grid gap-2 btn-primary btn-rounded btn-sm fw-bold" href="{{ route('spells.editSpell',$spell->id) }}">Edit</a></td>
                <td><a class="btn d-grid gap-2 btn-danger btn-rounded btn-sm fw-bold" href="{{ route('spells.deleteSpell',$spell->id) }}" onclick="return confirm('Are you sure you want to delete {{$spell->spell_name}}? \nThis action is permananet and non-reversable.')">Delete</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
