<?php

$name = $_POST["name"];
$description = $_POST["description"];
$date = date("Y-m-d h:ia", $d);

$servername = "localhost:3307";
$username = "root";
$password = "";
$db = "diary";

$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO entries (name, description, date)
VALUES ('$name', '$description', '$date')";

if (!mysqli_query($conn, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

echo '<script>location.href="../pages/index.php"</script>';
