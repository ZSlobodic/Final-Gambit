@extends('layouts.app')

@section('content')

    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
                    <a class="navbar-brand" href="/">ZiK</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
    </nav>

    <form action="{{ route('characters.createCharacter') }}" method="POST">
        @csrf
        <div class="form-group">
            <div class="container-sm">
            </div>

            <div class="container-lg">
                <label for="reference">Character Name: </label>
                <input type="text" class="form-control"  placeholder="Enter Character Name" name ="character_name">
                




                
                <label for="reference">Class Name: </label>
                <select name="class_name">
                @foreach ($classes as $key => $class)
                    @if ($key === 0)
                        <option value="{{ $class->class_name }}" selected>{{ $class->class_name }}</option>
                    @else
                        <option value="{{ $class->class_name }}">{{ $class->class_name }}</option>
                    @endif
                @endforeach
                </select>

                <label for="reference" class="form-label select-label">Add Spells (ctrl to select multiple): </label>
                <select name="added_spells[]" multiple>
                    @foreach ($spells as $spell)
                        <option value="{{ $spell->id }}">{{ $spell->spell_name }}</option>
                    @endforeach
                </select>





                <br>

                <label for="reference">SAM: </label>
                <input type="text" class="form-control"  placeholder="Enter Spellcasting Ability Modifier" name ="SAM">        

                <button type="submit" class="btn btn-success btn-block" style="green">Save</button>
            </div>

            <div class="container-sm">    
            </div>
        </div>
    </form>

@endsection
