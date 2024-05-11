<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Players</title>
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
            margin-bottom: 20px;
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
        .create-button {
            background-color: #000;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
            display: block;
            width: fit-content;
            margin: 20px auto;
        }

        .create-button:hover {
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
    <h1>Players</h1>

    @if($players->isEmpty())
        <p>No players available.</p>
    @else
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Team</th>
                <th>Details</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($players as $player)
                <tr>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->team->name }}</td>
                    <td><a href="{{ route('players.show', $player->id) }}">Details</a></td>
                    <td><a href="{{ route('players.edit', $player->id) }}">Edit</a></td>       
                    <td>
                        <form action="{{ route('players.destroy', $player->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('players.create', $player->id) }}" class="create-button">Create Player</a>

    @endif
</div>
</body>
</html>
