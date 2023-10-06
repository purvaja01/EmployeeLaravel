<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            @if(session('status'))
                {{ session('status') }}
            @endif
            <div class="col-md-12 mt-4 text-center">
                <table class="table">
                    <a href="{{ url('add-employee')}}">Add Employee</a>
                    <thead>
                    
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Designation</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employee as $empdata)
                        <tr>
                            <td>{{ $empdata->id }}</td>
                            <td>{{ $empdata->name }}</td>
                            <td>{{ $empdata->email }}</td>
                            <td>{{ $empdata->phone }}</td>
                            <td>{{ $empdata->designation }}</td>
                            <td>{{ $empdata->status }}</td>
                            <td><a type="button">Edit</a></td>
                            <td><a type="button">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
