<!doctype html>


<title>Editing Classes is Fun</title>
<link rel="stylesheet" href="/app.css">

<body>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
        </div>
    </div>
</div>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Class Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($classes as $class)
            <tr>
                <th scope="row">{{$class->id}}</th>
                <td>{{$class->class_name}}</td>

                <td><a class="btn btn-primary" href="{{ route('classes.editClass',$class->id) }}">Edit</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
