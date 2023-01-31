<!doctype html>

<body>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Spell</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('spells.index') }}">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check your fields.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif

<form action="{{ route('spells.updateSpell',$spell->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="reference">Spell Name: </label>
        <input type="text" class="form-control" value="{{ $spell->spell_name }}" placeholder="Enter Spell Name" name ="spell_name">
    </div>

    <div class="form-group">
        <label for="reference">School of Magic: </label>
        <input type="text" class="form-control" value="{{ $spell->school }}" placeholder="Enter School of Magic" name ="school">
    </div>

    <div class="form-group">
        <label for="reference">Spell Level: </label>
        <input type="text" class="form-control" value="{{ $spell->level }}" placeholder="Enter Spell Level" name ="level">
    </div>

    @if($spell->ritual == 0)
    <div class="form-group">
        <label for="reference">Ritual? </label>
        <input type='hidden' value='0' name='ritual'>
        <input type="checkbox" id="ritual" name="ritual" value="1">
    </div>
    @elseif($spell->ritual == 1)
    <div class="form-group">
        <label for="reference">Ritual? </label>
        <input type='hidden' value='0' name='ritual'>
        <input type="checkbox" id="ritual" name="ritual" value="1" checked>
    </div>
    @endif

    <div class="form-group">
        <label for="reference">Casting Time: </label>
        <input type="text" class="form-control" value="{{ $spell->casting_time }}" placeholder="Enter Castine Time" name ="casting_time">
    </div>

    <div class="form-group">
        <label for="reference">Range: </label>
        <input type="text" class="form-control" value="{{ $spell->range }}" placeholder="Enter Spell Range" name ="range">
    </div>

    <div class="form-group">
        <label for="reference">Target: </label>
        <input type="text" class="form-control" value="{{ $spell->target }}" placeholder="Enter Spell Target" name ="target">
    </div>

    @if($spell->vocal == 0)
    <div class="form-group">
        <label for="reference">V</label>
        <input type='hidden' value='0' name='vocal'>
        <input type="checkbox" id="vocal" name="vocal" value="1">
    </div>
    @elseif($spell->vocal == 1)
    <div class="form-group">
        <label for="reference">V</label>
        <input type='hidden' value='0' name='vocal'>
        <input type="checkbox" id="vocal" name="vocal" value="1" checked>
    </div>
    @endif

    @if($spell->somatic == 0)
    <div class="form-group">
        <label for="reference">S</label>
        <input type='hidden' value='0' name='somatic'>
        <input type="checkbox" id="somatic" name="somatic" value="1">
    </div>
    @elseif($spell->somatic == 1)
    <div class="form-group">
        <label for="reference">S</label>
        <input type='hidden' value='0' name='somatic'>
        <input type="checkbox" id="somatic" name="somatic" value="1" checked>
    </div>
    @endif

    @if($spell->material == 0)
    <div class="form-group">
        <label for="reference">M</label>
        <input type='hidden' value='0' name='material'>
        <input type="checkbox" id="material" name="material" value="1">
    </div>
    @elseif($spell->material == 1)
    <div class="form-group">
        <label for="reference">M</label>
        <input type='hidden' value='0' name='material'>
        <input type="checkbox" id="material" name="material" value="1" checked>
    </div>
    @endif

    <div class="form-group">
        <label for="reference">Components: </label>
        <input type="text" class="form-control" value="{{ $spell->components }}" placeholder="Enter Spell Target" name ="components">
    </div>

    @if($spell->concentration == 0)
    <div class="form-group">
        <label for="reference">Concentration? </label>
        <input type='hidden' value='0' name='concentration'>
        <input type="checkbox" id="concentration" name="concentration" value="1">
    </div>
    @elseif($spell->concentration == 1)
    <div class="form-group">
        <label for="reference">Concentration? </label>
        <input type='hidden' value='0' name='concentration'>
        <input type="checkbox" id="concentrion" name="concentration" value="1" checked>
    </div>
    @endif

    <div class="form-group">
        <label for="reference">Duration: </label>
        <input type="text" class="form-control" value="{{ $spell->duration }}" placeholder="Enter Spell Duration" name ="duration">
    </div>

    <div class="form-group">
        <label for="description">Description: </label>
        <textarea class="form-control" rows="3" placeholder ="Enter Spell Description" name="description">{{ $spell->description }}</textarea>
    </div>

    <div class="form-group">
        <label for="description">At Higher Levels: </label>
        <textarea class="form-control" rows="3" placeholder ="Enter Higher Level Effect" name="at_higher_levels">{{ $spell->at_higher_levels }}</textarea>
    </div>

    <button type="submit" class="btn btn-success btn-block">Save</button>
</form>
<a href="/">Home</a>
</body>