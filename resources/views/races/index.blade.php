<!doctype html>


<title>Editing Races is Fun</title>
<link rel="stylesheet" href="/app.css">

<body>

<a href="races/createRace">Create a new race!</a>

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
            <th scope="col">Race Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($races as $race)
            <tr>
                <th scope="row">{{$race->id}}</th>
                <td>{{$race->race_name}}</td>

                <td><a class="btn btn-primary" href="{{ route('races.editRace',$race->id) }}">Edit</a></td>
                <td><a class="btn btn-primary" href="{{ route('races.deleteRace',$race->id) }}" onclick="return confirm('Are you sure you want to delete {{$race->race_name}}? \nThis action is permananet and non-reversable.')">Delete</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="/">Home</a>
</body>
