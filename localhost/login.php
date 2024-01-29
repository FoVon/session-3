<?php
require_once 'db.php';

if (isset($_POST["user_name"]) &&  isset($_POST["user_lastname"])) { 
    $name = $_POST["user_name"];
    $lastname = $_POST["user_lastname"];
    $sql ="SELECT * FROM users WHERE user_name = '$name' AND user_lastname = '$lastname'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        header('Location: http://localhost/magaz.html');
    } else {
        echo "Authorization error";
    }
    $conn->close();
}
?>
