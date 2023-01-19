<!doctype html>


<title>Editing Subclasses is Fun</title>
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
            <th scope="col">Subclass Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subclasses as $subclass)
            <tr>
                <th scope="row">{{$subclass->id}}</th>
                <td>{{$subclass->subclass_name}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
