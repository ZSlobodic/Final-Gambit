<!doctype html>


<title>Inserting Subclasses is Fun</title>
<link rel="stylesheet" href="/app.css">

<body>
<form action="{{ route('subclasses.createSubclass') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="reference">Subclass Name: </label>
        <input type="text" class="form-control"  placeholder="Enter Subclass Name" name ="subclass_name">
    </div>

    <button type="submit" class="btn btn-success btn-block">F</button>
</form>
    <a href="/">Go Back</a>
</body>