<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username =htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);
        $favourite_game = htmlspecialchars($_POST["favourite_game"]);

        $errors = [];

        #Username validation
        if(empty($username)){
            $errors[] = "Username is required.";
        }elseif(strlen($username) < 5){
            $errors[] = "Username must be at least 5 characters long.";
        }

        #Password validation
        if(empty($password)){
            $errors[] = "Password is required.";
        }elseif(strlen($password) < 8){
            $errors[] = "Password must be at least 8 characters long.";
        }
        #Favourite Game validation
        if($favourite_game == "none" || empty($favourite_game)){
            $errors[] = "Please select your favourite game.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Result</title>
</head>
<body>
    <?php if(!empty($errors)):?>
        <ul>
            <?php foreach($errors as $error): ?>
                <li><?php echo htmlspecialchars($error); ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="../index.php">Go Back</a>
        <?php else: ?>
            <h2>Form Submitted Successfully!</h2>
            <p>Username: <?php echo $username; ?></p>
            <p>Password: **Hidden for Security**</p>
            <p>Favourite Game: <?php echo $favourite_game; ?></p>
            <a href="../index.php">Submit Another Response</a>
        <?php endif; ?>
</body>
</html>