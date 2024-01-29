<?php
$conn = new mysqli('localhost', 'root', '', 'mysite');
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
?>