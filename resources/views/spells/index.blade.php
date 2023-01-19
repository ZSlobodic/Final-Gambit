<!doctype html>


<title>Editing Spells is Fun</title>
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
            <th scope="col">Spell Name</th>
            <th scope="col">School</th>
            <th scope="col">Level</th>
            <th scope="col">Ritual</th>
            <th scope="col">Casting Time</th>
            <th scope="col">Range</th>
            <th scope="col">Target</th>

            <!--<th scope="col">Somatic</th>
            <th scope="col">Vocal</th>
            <th scope="col">Material</th>-->

            <th scope="col">Components</th>
            <th scope="col">Concentration</th>
            <th scope="col">Duration</th>
            <th scope="col">Description</th>
            <th scope="col">At Higher Levels</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($spells as $spell)
            <tr>
                <th scope="row">{{ $spell->id}}</th>
                <td>{{$spell->spell_name}}</td>
                <td>{{$spell->school}}</td>
                <td>{{$spell->level}}</td>
                <td>{{$spell->ritual}}</td>
                <td>{{$spell->casting_time}}</td>
                <td>{{$spell->range}}</td>
                <td>{{$spell->target}}</td>

                <!--<td>{{$spell->somatic}}</td>
                <td>{{$spell->vocal}}</td>
                <td>{{$spell->material}}</td>-->

                <td>{{$spell->components}}</td>
                <td>{{$spell->concentration}}</td>
                <td>{{$spell->duration}}</td>
                <td>{{$spell->description}}</td>
                <td>{{$spell->at_higher_levels}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
