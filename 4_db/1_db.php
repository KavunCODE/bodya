<!doctype html>
<html>
<head>
    <title>Our Funky HTML Page</title>
    <meta name="description" content="Our first page">
    <meta name="keywords" content="html tutorial template">
    <title>Użytkownicy</title>
</head>
<body>
<h4>Użytkownicy z db</h4>
<?php
require_once "../skrypt/connect.php";
$sql = "SELECT * FROM `users`";
$result = $conn->query($sql);
//$user = $result->fetch_assoc();
//print_r($user);
//echo "Imie i Nazwisko: " . $user["firstName"] . " " . $user["lastName"] . "<br>";

while ($user = $result->fetch_assoc())
{
    echo <<< USER
    $user[firstName] $user[lastName] | $user[birthday] <br>
    <hr>
    USER;

}
?>
</body>
</html>
