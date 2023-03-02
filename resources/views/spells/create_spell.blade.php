<!doctype html>


<title>Inserting Spells is Fun</title>
<link rel="stylesheet" href="/app.css">

<body>
<form action="{{ route('spells.createSpell') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="reference">Spell Name: </label>
        <input type="text" class="form-control"  placeholder="Enter Spell Name" name ="spell_name">
    </div>

    <div class="form-group">
        <label for="reference">School of Magic: </label>
        <input type="text" class="form-control"  placeholder="Enter School of Magic" name ="school">
    </div>

    <div class="form-group">
        <label for="reference">Spell Level: </label>
        <input type="text" class="form-control"  placeholder="Enter Spell Level" name ="level">
    </div>

    <div class="form-group">
        <label for="reference">Ritual? </label>
        <input type='hidden' value='0' name='ritual'>
        <input type="checkbox" id="Ritual" name="ritual" value="1">
    </div>

    <div class="form-group">
        <label for="reference">Casting Time: </label>
        <input type="text" class="form-control"  placeholder="Enter Castine Time" name ="casting_time">
    </div>

    <div class="form-group">
        <label for="reference">Range: </label>
        <input type="text" class="form-control"  placeholder="Enter Spell Range" name ="range">
    </div>

    <div class="form-group">
        <label for="reference">Target: </label>
        <input type="text" class="form-control"  placeholder="Enter Spell Target" name ="target">
    </div>

    <div class="form-group">
        <label for="reference">V</label>
        <input type='hidden' value='0' name='vocal'>
        <input type="checkbox" id="Vocal" name="vocal" value="1">
    </div>

    <div class="form-group">
        <label for="reference">S</label>
        <input type='hidden' value='0' name='somatic'>
        <input type="checkbox" id="Somatic" name="somatic" value="1">
    </div>

    <div class="form-group">
        <label for="reference">M</label>
        <input type='hidden' value='0' name='material'>
        <input type="checkbox" id="Material" name="material" value="1">
    </div>

    <div class="form-group">
        <label for="reference">Components: </label>
        <input type="text" class="form-control"  placeholder="Enter Spell Target" name ="components">
    </div>

    <div class="form-group">
        <label for="reference">Concentration? </label>
        <input type='hidden' value='0' name='concentration'>
        <input type="checkbox" id="concentration" name="concentration" value="1">

        <div class="form-group">
        <label for="reference">Duration: </label>
        <input type="text" class="form-control"  placeholder="Enter Spell Duration" name ="duration">
    </div>

    <div class="form-group">
        <label for="description">Description: </label>
        <textarea class="form-control" rows="3"placeholder ="Enter Spell Description" name="description"></textarea>
    </div>

    <div class="form-group">
        <label for="description">At Higher Levels: </label>
        <textarea class="form-control" rows="3"placeholder ="Enter Higher Level Effect" name="at_higher_levels"></textarea>
    </div>

    

    <button type="submit" class="btn btn-success btn-block">F</button>
</form>
<a href="/spells">Back to the spell page!</a><br>
<a href="/">Home</a>
</body>