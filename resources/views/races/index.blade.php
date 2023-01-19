<!doctype html>


<title>Editing Races is Fun</title>
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
            <th scope="col">Race Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($races as $race)
            <tr>
                <th scope="row">{{$race->id}}</th>
                <td>{{$race->race_name}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
