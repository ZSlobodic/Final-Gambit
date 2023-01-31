<!doctype html>


<title>Editing Backgrounds is Fun</title>
<link rel="stylesheet" href="/app.css">

<body>

<a href="backgrounds/createBackground">Create a new background!</a>

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
            <th scope="col">Background Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($backgrounds as $background)
            <tr>
                <th scope="row">{{$background->id}}</th>
                <td>{{$background->background_name}}</td>

                <td><a class="btn btn-primary" href="{{ route('backgrounds.editBackground',$background->id) }}">Edit</a></td>
                <td><a class="btn btn-primary" href="{{ route('backgrounds.deleteBackground',$background->id) }}" onclick="return confirm('Are you sure you want to delete {{$background->background_name}}? \nThis action is permananet and non-reversable.')">Delete</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="/">Home</a>
</body>
