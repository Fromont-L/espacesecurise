<?php
    session_start();
    // Read the file.
    $users = file_get_contents("opdatabase.json");
    // Convert into an associative array.
    $users = json_decode($users, true);
    // Get the input from the user.
    $username = $_POST["username"];
    $password = $_POST["password"];
    // Check the validity.
    if (isset($users[$username]) && password_verify($password, $users[$username])) {
        // Valid user.
        $_SESSION["username"] = $username;
        //cookie


        header('Location: espaceperso.php');
    } else {
        echo "Mauvais Indentifiants ou Compte non-enregistré";
    }
    
?>