<!doctype html>

<body>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Race</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('races.index') }}">Back</a>
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

<form action="{{ route('races.updateRace',$race->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="reference">Reference </label>
        <input type="text" class="form-control" value="{{ $race->race_name }}" placeholder="Enter Race Name" name ="race_name">
    </div>

    <button type="submit" class="btn btn-success btn-block">Save</button>
</form>
<a href="/">Home</a>
</body>