<!doctype html>


<title>Editing Feats is Fun</title>
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
            <th scope="col">Feat Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($feats as $feat)
            <tr>
                <th scope="row">{{$feat->id}}</th>
                <td>{{$feat->feat_name}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
