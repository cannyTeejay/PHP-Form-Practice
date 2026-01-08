<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username =htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);
        $favourite_game = htmlspecialchars($_POST["favourite_game"]);

        if(empty($username) || empty($password) || empty($favourite_game)){
            echo "All fields are required.";
        } else {
            echo "Username: " . $username . "<br>";
            echo "Password: " . "**Hidden for Security**" . "<br>";
            echo "Favourite Game: " . $favourite_game . "<br>";
        }
    }
?>