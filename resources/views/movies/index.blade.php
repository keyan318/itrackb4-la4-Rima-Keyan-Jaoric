<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Movies List</h1>
    <p>Prepared by: Keyan Jaoric V. Rima</p>

    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>Title</th>
        <th>Year</th>
      </tr>

      @foreach($movies as $movie)
        <tr>
          <td>{{ $movie['title'] }}</td>
          <td>{{ $movie['year'] }}</td>
        </tr>
      @endforeach
    </table>
</body>
</html>