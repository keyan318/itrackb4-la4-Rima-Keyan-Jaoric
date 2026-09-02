<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>
</head>
<body>
    <table> 
        <th>Name</th>
        <th>Course</th>

    @foreach
    <tr>
        <td>{{$student['name']}}</td>
        <td>{{$student['course']}}</td>

    </tr>
    @endforeach
    </table>


</body>
</html>