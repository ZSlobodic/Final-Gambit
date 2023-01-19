<!doctype html>


<title>Inserting Feats is Fun</title>
<link rel="stylesheet" href="/app.css">

<body>
<form action="{{ route('feats.createFeat') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="reference">Feat Name: </label>
        <input type="text" class="form-control"  placeholder="Enter Feat Name" name ="feat_name">
    </div>

    <button type="submit" class="btn btn-success btn-block">F</button>
</form>
    <a href="/">Go Back</a>
</body>