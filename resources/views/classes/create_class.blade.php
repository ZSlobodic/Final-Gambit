<!doctype html>


<title>Inserting Classes is Fun</title>
<link rel="stylesheet" href="/app.css">

<body>
<form action="{{ route('classes.createClass') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="reference">Class Name: </label>
        <input type="text" class="form-control"  placeholder="Enter Class Name" name ="class_name">
    </div>

    <button type="submit" class="btn btn-success btn-block">F</button>
</form>
    <a href="/">Go Back</a>
</body>