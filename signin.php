<?php
    session_start();
?>

<?php
    // Read the file.
    $users = file_get_contents("opdatabase.json");
    // Convert into an associative array.
    $users = json_decode($users, true);
    // Get the input from the user.
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    // Store the new one into the array.
    if (!isset($users[$username])) {


    $users[$username] = $password;
    // Convert back to JSON.
    $users = json_encode($users);
    // Put it into the file.
    
    file_put_contents("opdatabase.json", $users);
    header('Location: accepted.php');
    }
    else {
    header('Location: refused.php');
    }
?>

