<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtered Movies</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
            color: #222;
        }

        .filter-info {
            text-align: center;
            color: #666;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #222;
            color: white;
            padding: 14px;
            text-align: left;
        }

        td {
            padding: 13px 14px;
            border-bottom: 1px solid #ddd;
            color: #444;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover {
            background: #f7f7f7;
        }

        a {
            color: #222;
            font-weight: bold;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        footer {
            text-align: center;
            margin-top: 25px;
            color: #888;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>🎬 Movies</h1>

        <div class="filter-info">
            @if($value)
                Showing genre: <strong>{{ $value }}</strong>
            @else
                Showing all movies
            @endif
        </div>

        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Year</th>
                </tr>
            </thead>

            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>
                            <a href="{{ route('movies.show', $item['id']) }}">
                                {{ $item['title'] }}
                            </a>
                        </td>
                        <td>{{ $item['genre'] }}</td>
                        <td>{{ $item['year'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        

    </div>

</body>
</html>

