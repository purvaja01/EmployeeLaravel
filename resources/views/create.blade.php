<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Add Employee
        <a href="{{url('employee')}}">BACK</a>
    </h3>
    <div>
        <form action="{{url('store-employee')}}" method="post">
            @csrf
            <div>
                <label>NAME</label>
                <input type="text" name="name">

                <label>EMAIL</label>
                <input type="email" name="email">

                <label>PHONE</label>
                <input type="number" name="phone">

                <label>DESIGNATION</label>
                <input type="text" name="desig">

                <button type="submit">Submit</button>

            </div>

        </form>
    </div>

</body>
</html>