<?php
$servername = "localhost"; /* nome da conexão */
$username = "provida"; /* nome do usuario da conexãp */
$password = "t1vFxpirypCl1tz"; /*senha do banco de dados caso exista */
$dbname = "beja_provida"; /* nome do seu banco  */

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Não conectado: " . $conn->connect_error);
} 
?>