
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Football Page</title>
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
            text-align: center;
            padding: 20px;
        }
        h1 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2rem;
            color: #666;
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
        <h1>Welcome to the Football Page</h1>
        <p>Explore the world of football! View teams, players, and more.</p>
    </div>
</body>
</html>
