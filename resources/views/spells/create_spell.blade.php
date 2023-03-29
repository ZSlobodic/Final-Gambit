<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Spells</title>
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
                    <!-- <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                    </li> -->

                    <li class="nav-item">
                        <a class="nav-link" href="/spells">Back</a>
                    </li>
                </ul>

                
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
</nav>

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

    

    <button type="submit" class="btn btn-success btn-block">Save</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>