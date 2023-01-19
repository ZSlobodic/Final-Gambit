<!doctype html>


<title>Editing Backgrounds is Fun</title>
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
            <th scope="col">Background Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($backgrounds as $background)
            <tr>
                <th scope="row">{{$background->id}}</th>
                <td>{{$background->background_name}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
