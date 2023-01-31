<!doctype html>


<title>Inserting Backgrounds is Fun</title>
<link rel="stylesheet" href="/app.css">

<body>
<form action="{{ route('backgrounds.createBackground') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="reference">Background Name: </label>
        <input type="text" class="form-control"  placeholder="Enter Background Name" name ="background_name">
    </div>

    <button type="submit" class="btn btn-success btn-block">F</button>
</form>
<a href="/backgrounds">Back to the background page!</a><br>
<a href="/">Home</a>
</body>