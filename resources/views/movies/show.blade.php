<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $item['title'] }}</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin-top: 0;
            margin-bottom: 25px;
            color: #222;
        }

        .details {
            border-top: 1px solid #ddd;
            padding-top: 15px;
        }

        .details p {
            margin: 15px 0;
            color: #444;
        }

        .back {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 16px;
            background: #222;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .back:hover {
            background: #444;
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

        <h1>🎬 {{ $item['title'] }}</h1>

        <div class="details">
            <p><strong>Genre:</strong> {{ $item['genre'] }}</p>
            <p><strong>Year:</strong> {{ $item['year'] }}</p>
            <p><strong>Director:</strong> {{ $item['director'] }}</p>
            <p><strong>Rating:</strong> {{ $item['rating'] }}</p>
            <p><strong>Duration:</strong> {{ $item['duration'] }}</p>
        </div>

        <a class="back" href="{{ route('movies.index') }}">
            ← Back to List
        </a>

        
    </div>

</body>
</html>

