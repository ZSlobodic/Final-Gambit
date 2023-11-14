<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $character->character_name }} Sheet</title>
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
    
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                {{ $character->character_name }}
            </h1>
        </div>
    </div>

    <div class="py-10 text-centar">
        <div class="m-auto">
            <!--<span class="uppercase text-blue-500 font-bold text-xs italic">
                Class: {{ $character->class_name }}
            </span>-->
        
            <span class="uppercase text-blue-500 font-bold text-xs italic">
                Spellcasting Ability Modifier: {{ $character->SAM }}
            </span>
            <p>Remember that your DC for spells is always: 8 + Proficency bonus + SAM + any other source you may be getting it from if any! DC: <input type="text" style="width: 26px"></p>
        </div>

        <ul>
        

            <div class="container-fluid">
                <div class="row">

                    <div class="card" style="width: auto;">
                        <div class="card-body">
                            <p>Cantrip:</p>
                            @forelse ($character->spells as $spell)
                                @if (($spell->level) == "cantrip")
                                    <li class="inline italic text-gray-600 px-1 py-6">
                                        
                                        <a href = "{{ route('spells.showSpell',$spell->id) }}" target="_blank">{{$spell->spell_name}}</a>
                                        
                                    </li>
                                @endif
                            @empty
                                <p>No spells found.</p>
                            @endforelse
                        </div>
                    </div>
                
            
                    <br>

                    <div class="card" style="width: auto;">
                        <div class="card-body">
                            <p>1st level:</p>
                            <p>Spell slots - Max: <input type="text" style="width: 18px"> / <input type="text" style="width: 18px"></p>
                            @forelse ($character->spells as $spell)
                                @if (($spell->level) == "1")
                                    <li class="inline italic text-gray-600 px-1 py-6">
                                        <input type="checkbox" value="1">
                                        <a href = "{{ route('spells.showSpell',$spell->id) }}" target="_blank">{{$spell->spell_name}}</a> 
                                    </li>
                                @endif
                            @empty
                                <p>No spells found.</p>
                            @endforelse
                        </div>
                    </div>

                    <br>

                    <div class="card" style="width: auto;">
                        <div class="card-body">
                            <p>2nd level:</p>
                            <p>Spell slots - Max: <input type="text" style="width: 18px"> / <input type="text" style="width: 18px"></p>
                            @forelse ($character->spells as $spell)
                                @if (($spell->level) == "2")
                                    <li class="inline italic text-gray-600 px-1 py-6">
                                        <input type="checkbox" value="1">
                                        <a href = "{{ route('spells.showSpell',$spell->id) }}" target="_blank">{{$spell->spell_name}}</a>
                                    </li>
                                @endif
                            @empty
                                <p>No spells found.</p>
                            @endforelse
                        </div>
                    </div>
                    
                    <br>

                    <div class="card" style="width: auto;">
                        <div class="card-body">
                            <p>3rd level:</p>
                            <p>Spell slots - Max: <input type="text" style="width: 18px"> / <input type="text" style="width: 18px"></p>
                            @forelse ($character->spells as $spell)
                                @if (($spell->level) == "3")
                                    <li class="inline italic text-gray-600 px-1 py-6">
                                        <input type="checkbox" value="1">
                                        <a href = "{{ route('spells.showSpell',$spell->id) }}" target="_blank">{{$spell->spell_name}}</a>
                                    </li>
                                @endif
                            @empty
                                <p>No spells found.</p>
                            @endforelse
                        </div>
                    </div>
                    
                    <br>

                    <div class="card" style="width: auto;">
                        <div class="card-body">
                            <p>4th level:</p>
                            <p>Spell slots - Max: <input type="text" style="width: 18px"> / <input type="text" style="width: 18px"></p>
                            @forelse ($character->spells as $spell)
                                @if (($spell->level) == "4")
                                    <li class="inline italic text-gray-600 px-1 py-6">
                                        <input type="checkbox" value="1">
                                        <a href = "{{ route('spells.showSpell',$spell->id) }}" target="_blank">{{$spell->spell_name}}</a>
                                    </li>
                                @endif
                            @empty
                                <p>No spells found.</p>
                            @endforelse
                        </div>
                    </div>
                    
                    <br>

                    <div class="card" style="width: auto;">
                        <div class="card-body">
                            <p>5th level:</p>
                            <p>Spell slots - Max: <input type="text" style="width: 18px"> / <input type="text" style="width: 18px"></p>
                            @forelse ($character->spells as $spell)
                                @if (($spell->level) == "5")
                                    <li class="inline italic text-gray-600 px-1 py-6">
                                        <input type="checkbox" value="1">
                                        <a href = "{{ route('spells.showSpell',$spell->id) }}" target="_blank">{{$spell->spell_name}}</a>
                                    </li>
                                @endif
                            @empty
                                <p>No spells found.</p>
                            @endforelse
                        </div>
                    </div>
                    
                    <br>

                    <div class="card" style="width: auto;">
                        <div class="card-body">
                            <p>6th level:</p>
                            <p>Spell slots - Max: <input type="text" style="width: 18px"> / <input type="text" style="width: 18px"></p>
                            @forelse ($character->spells as $spell)
                                @if (($spell->level) == "6")
                                    <li class="inline italic text-gray-600 px-1 py-6">
                                        <input type="checkbox" value="1">
                                        <a href = "{{ route('spells.showSpell',$spell->id) }}" target="_blank">{{$spell->spell_name}}</a>
                                    </li>
                                @endif
                            @empty
                                <p>No spells found.</p>
                            @endforelse
                        </div>
                    </div>
                    
                    <br>

                    <div class="card" style="width: auto;">
                        <div class="card-body">
                            <p>7th level:</p>
                            <p>Spell slots - Max: <input type="text" style="width: 18px"> / <input type="text" style="width: 18px"></p>
                            @forelse ($character->spells as $spell)
                                @if (($spell->level) == "7")
                                    <li class="inline italic text-gray-600 px-1 py-6">
                                        <input type="checkbox" value="1">
                                        <a href = "{{ route('spells.showSpell',$spell->id) }}" target="_blank">{{$spell->spell_name}}</a>
                                    </li>
                                @endif
                            @empty
                                <p>No spells found.</p>
                            @endforelse
                        </div>
                    </div>
                    
                    <br>

                    <div class="card" style="width: auto;">
                        <div class="card-body">
                            <p>8th level:</p>
                            <p>Spell slots - Max: <input type="text" style="width: 18px"> / <input type="text" style="width: 18px"></p>
                            @forelse ($character->spells as $spell)
                                @if (($spell->level) == "8")
                                    <li class="inline italic text-gray-600 px-1 py-6">
                                        <input type="checkbox" value="1">
                                        <a href = "{{ route('spells.showSpell',$spell->id) }}" target="_blank">{{$spell->spell_name}}</a>
                                    </li>
                                @endif
                            @empty
                                <p>No spells found.</p>
                            @endforelse
                        </div>
                    </div>
                    
                    <br>

                    <div class="card" style="width: auto;">
                        <div class="card-body">
                            <p>9th level:</p>
                            <p>Spell slots - Max: <input type="text" style="width: 18px"> / <input type="text" style="width: 18px"></p>
                            @forelse ($character->spells as $spell)
                                @if (($spell->level) == "9")
                                    <li class="inline italic text-gray-600 px-1 py-6">
                                        <input type="checkbox" value="1">
                                        <a href = "{{ route('spells.showSpell',$spell->id) }}" target="_blank">{{$spell->spell_name}}</a>
                                    </li>
                                @endif
                            @empty
                                <p>No spells found.</p>
                            @endforelse
                        </div>
                    </div>
                
                </div>
            </div>
        </ul>

        <hr class="mt-4 mb-8">
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>