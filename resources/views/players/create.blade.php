<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Player</title>
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
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
        button:hover {
            background-color: #45a049;
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
    <h1>Create Player</h1>
    <form action="{{ route('players.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="team_id">Team:</label>
        <select id="team_id" name="team_id" required>
            <option value="">Select Team</option>
            @foreach($teams as $team)
                <option value="{{ $team->id }}">{{ $team->name }}</option>
            @endforeach
        </select><br>

        <label for="position">Position:</label>
        <input type="text" id="position" name="position" required><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br>

        <label for="nationality">Nationality:</label>
        <input type="text" id="nationality" name="nationality" required><br>

        <button type="submit">Create Player</button>
    </form>
</div>
</body>
</html>
