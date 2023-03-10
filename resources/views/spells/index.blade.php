<!doctype html>


<title>Spell Database</title>
<link rel="stylesheet" href="/app.css">

<body>

<a href="spells/createSpell">Create a new spell!</a>

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

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
        </div>
    </div>
</div>
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

                <td><a class="btn btn-primary" href="{{ route('spells.editSpell',$spell->id) }}">Edit</a></td>
                <td><a class="btn btn-primary" href="{{ route('spells.deleteSpell',$spell->id) }}" onclick="return confirm('Are you sure you want to delete {{$spell->spell_name}}? \nThis action is permananet and non-reversable.')">Delete</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="/">Home</a>
</body>
