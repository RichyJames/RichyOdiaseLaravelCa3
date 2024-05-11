<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Details</title>
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

.right-links {
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

.details-section {
    margin-bottom: 20px;
}

.details-section p {
    margin: 5px 0;
}

.details-section strong {
    font-weight: bold;
}

.back-link {
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

.back-link:hover {
    color: #fff;
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
    <h1>Player Details</h1>
    <div>
        <p><strong>Name:</strong> {{ $player->name }}</p>
        <p><strong>Team:</strong> {{ $player->team->name }}</p>
        <p><strong>Position:</strong> {{ $player->position }}</p>
        <p><strong>Age:</strong> {{ $player->age }}</p>
        <p><strong>Nationality:</strong> {{ $player->nationality }}</p>
    </div>
    <a href="{{ route('players.index') }}"class="back-link">Back to Players</a>
</div>
</body>
</html>
