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
                        <li><a class="dropdown-item" href="/spells">Spell Data Base</a></li>
                        <li><a class="dropdown-item" href="/classes">Class Data Base</a></li>
                        <li><a class="dropdown-item" href="/subclasses">Subclasses Data Base</a></li>
                        <li><a class="dropdown-item" href="/backgrounds">Background Data Base</a></li>
                        <li><a class="dropdown-item" href="/races">Race Data Base</a></li>
                        <li><a class="dropdown-item" href="/feats">Feat Data Base</a></li>
                        <li><a class="dropdown-item" href="#">Item Data Base</a></li>
                        <!--<li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>-->
                    </ul>
                    </li>
                    <!-- <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                    </li> -->

                    <li class="nav-item">
                        <a class="nav-link" href="/spells/createSpell">New Spell</a>
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

<!--<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
        </div>
    </div>
</div>-->


<div class="container">
<div class="row">


<div class="col-md-auto">
<div class="form-group" style="width: 45rem; max-height: 800px; overflow-y: scroll">
    <!--<div class="container-sm">    
    </div>-->

    <!--<div class="container-lg">-->
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <!--<th scope="col">#</th>-->
                <th style="position: sticky; top: 0; background-color: #fff; " scope="col">Name</th>
                <th style="position: sticky; top: 0; background-color: #fff" scope="col">Level</th>
                <th style="position: sticky; top: 0; background-color: #fff" scope="col">Time</th>
                <th style="position: sticky; top: 0; background-color: #fff" scope="col">School</th>
                <th style="position: sticky; top: 0; background-color: #fff" scope="col">C.</th>
                <th style="position: sticky; top: 0; background-color: #fff" scope="col">Range</th>
                <!--<th style="position: sticky; top: 0; background-color: #fff" scope="col">Ritual</th>-->
                <!--<th scope="col">Target</th>-->
                <!--<th scope="col">Somatic</th>-->
                <!--<th scope="col">Vocal</th>-->
                <!--<th scope="col">Material</th>-->
                <!--<th scope="col">Components</th>-->
                <!--<th scope="col">Duration</th>-->
                <!--<th scope="col">Description</th>-->
                <!--<th scope="col">At Higher Levels</th>-->
                <th style="position: sticky; top: 0; background-color: #fff" scope="col"></th>
                <th style="position: sticky; top: 0; background-color: #fff" scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($spells as $spell)
                <tr>
                    <!--<th scope="row">{{ $spell->id}}</th>-->
                    <td><a href = "{{ route('spells.showSpell',$spell->id) }}">{{$spell->spell_name}}</td>
                    <td>{{$spell->level}}
                        @switch ($spell->ritual)
                            @case (1)
                                (rit.)
                            @break
                        @endswitch
                    </td>
                    <td>{{$spell->casting_time}}</td>
                    <td>{{$spell->school}}</td>
                    <td>
                        @switch ($spell->concentration)
                            @case (1)
                                X
                            @break
                        @endswitch
                    </td>
                    <td>{{$spell->range}}</td>
                    <!--<td>{{$spell->ritual}}</td>-->
                    <!--<td>{{$spell->target}}</td>-->
                    <!--<td>{{$spell->somatic}}</td>-->
                    <!--<td>{{$spell->vocal}}</td>-->
                    <!--<td>{{$spell->material}}</td>-->
                    <!--<td>{{$spell->components}}</td>-->
                    <!--<td>{{$spell->duration}}</td>-->
                    <!--<td>{{$spell->description}}</td>-->
                    <!--<td>{{$spell->at_higher_levels}}</td>-->
                    <td class="col-md-1"><a class="btn d-grid gap-2 btn-primary btn-rounded btn-sm fw-bold" href="{{ route('spells.editSpell',$spell->id) }}">Edit</a></td>
                    <td class="col-md-1"><a class="btn d-grid gap-2 btn-danger btn-rounded btn-sm fw-bold" href="{{ route('spells.deleteSpell',$spell->id) }}" onclick="return confirm('Are you sure you want to delete {{$spell->spell_name}}? \nThis action is permananet and non-reversable.')">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!--</div>-->

    <!--<div class="container-sm">    
    </div>-->
</div>
</div>


<div class="col">
<div class="card" style="width: 30rem; max-height: 800px; overflow-y: scroll">
    <!--<th scope="row">{{ $shown_spell->id}}</th><br>-->
    <div class="card-body">
        <h1><td>{{$shown_spell->spell_name}}</td></h1>
        <p>
            @if (($shown_spell->level) == "Cantrip")
                <td>{{$shown_spell->school}} {{$shown_spell->level}}</td>
            @elseif (($shown_spell->ritual) == "1")
                <td>{{$shown_spell->level}}-level {{$shown_spell->school}} (ritual)</td>
            @elseif (($shown_spell->ritual) == "0")
                <td>{{$shown_spell->level}}-level {{$shown_spell->school}}</td>
            @endif
        </p>

        <!--<p>Ritual:
            @if (($shown_spell->ritual) == "0")
                <td>No</td>
            @elseif (($shown_spell->ritual) == "1")
                <td>Yes</td>
            @endif
        </p>-->

        <!--<p>
            Ritual:
            @switch ($shown_spell->ritual)
                @case (0)
                    <td>No</td>
                @break
                @case (1)
                    <td>Yes</td>
                @break
            @endswitch
        </p>-->


        <p>Casting time: <td>{{$shown_spell->casting_time}}</td></p>
        <p>Range: <td>{{$shown_spell->range}}</td></p>
        <p>
            @if (($shown_spell->target) == "<Placeholder>")
                
            @else
                <td>Target: {{$shown_spell->target}}</td>
            @endif
        </p>
        <p>Components: 
            @switch ($shown_spell->vocal)
                @case (1)
                    @if (($shown_spell->material) == "1" or ($shown_spell->somatic) == "1")
                        <td>V,</td>
                    @elseif (($shown_spell->material) == "0" and ($shown_spell->somatic) == "0")
                        <td>V</td>
                    @endif
                @break
            @endswitch

            @switch ($shown_spell->somatic)
                @case (1)
                    @if (($shown_spell->material) == "1")
                        <td>S,</td>
                    @elseif (($shown_spell->material) == "0")
                        <td>S</td>
                    @endif
                @break
            @endswitch

            @switch ($shown_spell->material)
                @case (1)
                    <td>M ({{$shown_spell->components}})</td>
                @break
            @endswitch
        </p>
        <p>Duration:
            @switch ($shown_spell->concentration)
                @case (1)
                    <td>Concentration, {{$shown_spell->duration}}</td>
                @break
                @case (0)
                    <td>{{$shown_spell->duration}}</td>
                @break
            @endswitch
        </p>
        <hr>
        <p><td>{{$shown_spell->description}}</td></p>
        <p><td>
            @if (($shown_spell->at_higher_levels) == "<Placeholder>")
                
            @else
                <td>At higher levels: {{$shown_spell->at_higher_levels}}</td>
            @endif
        </td></p>
    </div>
</div>
</div>


</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
