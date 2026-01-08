<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="includes/formhandler.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" placeholder="Username">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Password">
        <br>
        <label for="favourite_game">Favourite Game:</label>
        <select name="favourite_game" required>
            <option value="none" disabled selected>Select your favourite game</option>
            <option value="BattleField">BattleField</option>
            <option value="Call of Duty">Call of Duty</option>
            <option value="FIFA">FIFA</option>
            <option value="GTA">GTA</option>
        </select>
        <button type="submit">Submit</button>
    </form>
</body>
</html>