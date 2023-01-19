<!doctype html>


<title>Inserting Races is Fun</title>
<link rel="stylesheet" href="/app.css">

<body>
<form action="{{ route('races.createRace') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="reference">Race Name: </label>
        <input type="text" class="form-control"  placeholder="Enter Race Name" name ="race_name">
    </div>

    <button type="submit" class="btn btn-success btn-block">F</button>
</form>
    <a href="/">Go Back</a>
</body>