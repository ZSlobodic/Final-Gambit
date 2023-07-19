<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <P>yikes</P>

    
    @if ($is_logged_in == 1)
        @if ($user -> is_admin == 1)
            <p>You are an admin.</p>
        @endif
    @endif

    <div class="form-group">
        <div class="container-sm">    
        </div> 

        <div class="container-lg">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Admin</th>
                    <th scope="col"></th>
                    <!--<th scope="col">Password</th>-->
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row" class="col-md-1">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        
                        @if (($user->is_admin) == "1")
                            <td>Yes</td>
                        @elseif (($user->is_admin) == "0")
                            <td>No</td>
                        @endif
                        
                        
                        <td>
                            <form method="GET" action="{{ route('users.FetchUsers', $user->id) }}">
                                <button class="btn d-grid gap-2 btn-primary btn-rounded btn-sm fw-bold">Edit</button>
                            </form>
                        </td>
                        
                        <!--<td class="col-md-1"><a class="btn d-grid gap-2 btn-primary btn-rounded btn-sm fw-bold" href="{{ route('users.FetchUsers', $user->id)}}">Edit</a></td>-->
                        
                        <!--<td>{{$user->password}}</td>-->
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>

        <div class="container-sm">    
        </div> 
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>