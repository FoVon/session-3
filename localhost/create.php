<?php
require_once 'db.php';

if (isset($_POST["user_name"]) &&  isset($_POST["user_lastname"]) && isset($_POST["user_age"])) {
      
    $conn = new mysqli("localhost", "root", "", "mysite");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $name = $conn->real_escape_string($_POST["user_name"]);
    $lastname = $conn->real_escape_string($_POST["user_lastname"]);
    $age = $conn->real_escape_string($_POST["user_age"]);
    $sql = "INSERT INTO users (user_name, user_lastname, user_age) VALUES ('$name', '$lastname', $age)";
    if($conn->query($sql)){
        
        echo "Данные успешно добавлены";
        header('Location: http://localhost/login.html');
    } 
    else{
        echo "Ошибка: " . $conn->error;
        
    }
    $conn->close();
}
?>
