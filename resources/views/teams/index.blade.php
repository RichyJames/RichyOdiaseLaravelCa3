<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teams</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #333;
            padding: 10px;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header h1 {
            margin: 0;
            font-size: 1.5rem;
        }
        .header a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .left-links {
            align-items:center;
            margin-right: 70%; 
        }
        .right-links{
            align-items:center;
            margin-left: 0%; 
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #333;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
<div class="header">
        <h1>FootballWorld</h1>
        <div class="left-links">
            <a href="{{ url('/') }}">Home</a>
        </div>
        <div class="right-links">
            <a href="{{ route('players.index') }}">Players</a>
            <a href="{{ route('teams.index') }}">Teams</a>
        </div>
    </div>

    <div class="container">
        <h1>Teams</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>City</th>
                    <th>Coach</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teams as $team)
                    <tr>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->city }}</td>
                        <td>{{ $team->coach }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
