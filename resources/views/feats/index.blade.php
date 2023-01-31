<!doctype html>


<title>Editing Feats is Fun</title>
<link rel="stylesheet" href="/app.css">

<body>

<a href="feats/createFeat">Create a new feat!</a>

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

                <td><a class="btn btn-primary" href="{{ route('feats.editFeat',$feat->id) }}">Edit</a></td>
                <td><a class="btn btn-primary" href="{{ route('feats.deleteFeat',$feat->id) }}" onclick="return confirm('Are you sure you want to delete {{$feat->feat_name}}? \nThis action is permananet and non-reversable.')">Delete</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="/">Home</a>
</body>
