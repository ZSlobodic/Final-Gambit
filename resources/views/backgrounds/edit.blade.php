<!doctype html>

<body>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Background</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('backgrounds.index') }}">Back</a>
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

<form action="{{ route('backgrounds.updateBackground',$background->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="reference">Reference </label>
        <input type="text" class="form-control" value="{{ $background->background_name }}" placeholder="Enter Background Name" name ="background_name">
    </div>

    <button type="submit" class="btn btn-success btn-block">Save</button>
</form>
<a href="/">Home</a>
</body>