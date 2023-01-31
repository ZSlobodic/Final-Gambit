<!doctype html>

<body>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Subclass</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('subclasses.index') }}">Back</a>
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

<form action="{{ route('subclasses.updateSubclass',$subclass->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="reference">Reference </label>
        <input type="text" class="form-control" value="{{ $subclass->subclass_name }}" placeholder="Enter Subclass Name" name ="subclass_name">
    </div>

    <button type="submit" class="btn btn-success btn-block">Save</button>
</form>
<a href="/">Home</a>
</body>