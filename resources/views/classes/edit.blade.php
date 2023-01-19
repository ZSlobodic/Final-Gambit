<!doctype html>

<body>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Material</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('classes.index') }}"> Atpakaļ</a>
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

<form action="{{ route('classes.updateClass',$class->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="reference">Reference </label>
        <input type="text" class="form-control" value="{{ $class->class_name }}" placeholder="Enter Class Name" name ="class_name">
    </div>

    <button type="submit" class="btn btn-success btn-block">Saglabāt</button>
</form>
</body>