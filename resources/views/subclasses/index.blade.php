<!doctype html>


<title>Editing Subclasses is Fun</title>
<link rel="stylesheet" href="/app.css">

<body>

<a href="subclasses/createSubclass">Create a new subclass!</a>

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
            <th scope="col">Subclass Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subclasses as $subclass)
            <tr>
                <th scope="row">{{$subclass->id}}</th>
                <td>{{$subclass->subclass_name}}</td>

                <td><a class="btn btn-primary" href="{{ route('subclasses.editSubclass',$subclass->id) }}">Edit</a></td>
                <td><a class="btn btn-primary" href="{{ route('subclasses.deleteSubclass',$subclass->id) }}" onclick="return confirm('Are you sure you want to delete {{$subclass->subclass_name}}? \nThis action is permananet and non-reversable.')">Delete</a></td>
            </tr>
        @endforeach
    </tbody>
</table><br>
<a href="/">Home</a>
</body>
