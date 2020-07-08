<?php
define('DB_SERVER', 'localhost');
define('DB_TABLE_NAME', 'forma');
define('DB_USER', 'root');
define('DB_PASSWORD', '');


$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_TABLE_NAME);
if ($mysqli->connect_error) {
    echo 'Ryšio klaida. Duomenų bazė nepasiekiama';
}

$sql = mysqli_query($mysqli, "INSERT INTO  klientai (vardas, email, message) VALUES ('$name', '$email', '$message')");

// if(mysqli_query($mysqli, $sql)){
// echo 'issaugota sekmingai';
// }else{
//     echo 'klaida';
// }

//should be on seperate protected file
$sql = "SELECT * FROM klientai";
$result = $mysqli->query($sql);
$array = $result->fetch_assoc();

while ($array = $result->fetch_assoc()) {
    var_dump($array);
}
