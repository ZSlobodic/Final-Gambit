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

                
                <!--<form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>-->
            </div>
        </div>

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
</nav>


<div class="container" style="margin-bottom: 40px; margin-top:40px">
   
    <div class="input-group">
        <td>
            <form action="{{ route('spells.index') }}" method="GET">
                <label for="SNquery">Search by Spell Name:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="SNquery" value="{{ old('SNquery') }}" placeholder="Search by Spell Name..." aria-describedby="button-addon1">
                    <button type="submit" class="btn btn-primary" style="margin-right:40px">Search</button>
                </div>
            </form>
        </td>

        <td>
            <form action="{{ route('spells.index') }}" method="GET">
                <label for="SLquery">Search by Spell Level:</label>
                <div class="input-group">
                    <select name="SLquery" id="SLquery" class="form-control">
                        <option value="">Choose...</option>
                        <option value="Cantrip">Cantrip</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th</option>
                        <option value="5th">5th</option>
                        <option value="6th">6th</option>
                        <option value="7th">7th</option>
                        <option value="8th">8th</option>
                        <option value="9th">9th</option>
                    </select>
                    <button type="submit" value="Submit" class="btn btn-primary" id="button-addon1" style="margin-right:40px">Search</button>
                </div>
            </form>
        </td>
                
        <td>
            <form action="{{ route('spells.index') }}" method="GET">
                <label for="SSquery">Search by the School of Spell:</label>
                <div class="input-group">
                    <select name="SSquery" id="SSquery" class="form-control">
                        <option value="">Choose...</option>
                        <option value="Abjuration">Abjuration</option>
                        <option value="Conjuration">Conjuration</option>
                        <option value="Divination">Divination</option>
                        <option value="Enchantment">Enchantment</option>
                        <option value="Evocation">Evocation</option>
                        <option value="Illusion">Illusion</option>
                        <option value="Necromancy">Necromancy</option>
                        <option value="Transmutation">Transmutation</option>
                    </select>
                    <button type="submit" value="Submit" class="btn btn-primary" id="button-addon1" style="margin-right:40px">Search</button>
                </div>
            </form>
        </td>
    </div>

</div>



<div class="container">
<div class="row">

<div class="col-md-auto">
<div class="form-group" style="width: 50rem; max-height: 800px; overflow-y: scroll">
    <!--<div class="container-sm">    
    </div>-->

    <!--<div class="container-lg">-->
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <!--<th scope="col">#</th>-->
                <th style="position: sticky; top: 0; background-color: #fff;"scope="col">Name</th>
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

                @if ($is_logged_in == 1)
                    @if ($user -> is_admin == 1)
                        <th style="position: sticky; top: 0; background-color: #fff" scope="col"></th>
                        <th style="position: sticky; top: 0; background-color: #fff" scope="col"></th>
                    @endif
                @endif
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

                    @if ($is_logged_in == 1)
                        @if ($user -> is_admin == 1)
                            <td class="col-md-1"><a class="btn d-grid gap-2 btn-primary btn-rounded btn-sm fw-bold" href="{{ route('spells.editSpell',$spell->id) }}">Edit</a></td>
                            <td class="col-md-1"><a class="btn d-grid gap-2 btn-danger btn-rounded btn-sm fw-bold" href="{{ route('spells.deleteSpell',$spell->id) }}" onclick="return confirm('Are you sure you want to delete {{$spell->spell_name}}? \nThis action is permananet and non-reversable.')">Delete</a></td>
                        @endif
                    @endif

                    
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
<div class="card" style="width: 29rem; max-height: 800px; overflow-y: scroll">
    <div class="card-body">
        @if ($shown_spell == Null)

        @else
        <h1><td>{{$shown_spell->spell_name}}</td></h1>
        
        <p><td>{{$shown_spell->type}}</td></p>
        
        <!--@if (($shown_spell->level) == "cantrip")
            <td>{{$shown_spell->school}} {{$shown_spell->level}}</td>
        @elseif (($shown_spell->ritual) == "1")
            <td>{{$shown_spell->level}}-level {{$shown_spell->school}} (ritual)</td>
        @elseif (($shown_spell->ritual) == "0")
            <td>{{$shown_spell->level}}-level {{$shown_spell->school}}</td>
        @endif-->

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
            @if (($shown_spell->target))
                <td>Target: {{$shown_spell->target}}</td>
            @endif
        </p>

        <!--Components which are represented by the V, S, and M letters.-->
        <p>Components: <!--Vocal-->
            @if (($shown_spell->vocal) == "1" and ($shown_spell->material) == "1" or ($shown_spell->somatic) == "1")
                <td>V,</td>
            @elseif (($shown_spell->vocal) == "1" and ($shown_spell->material) == "0" and ($shown_spell->somatic) == "0")
                <td>V</td>
            @endif

            <!--Somatic-->
            @if (($shown_spell->somatic) == "1" and ($shown_spell->material) == "1")
                <td>S,</td>
            @elseif (($shown_spell->somatic) == "1" and ($shown_spell->material) == "0")
                <td>S</td>
            @endif

            <!--Material-->
            @switch ($shown_spell->material)
                @case (1)
                    <td>M ({{$shown_spell->components}})</td>
                @break
            @endswitch
        </p>

        <p>Duration: {{$shown_spell->duration}}</p>

        <hr>
        
        <p><td>{{$shown_spell->description}}</td></p>
        <p><td>
            @if (($shown_spell->at_higher_levels))
                <td>At higher levels: {{$shown_spell->at_higher_levels}}</td>
            @endif
        </td></p>

        @endif
    </div>
</div>
</div>


</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
