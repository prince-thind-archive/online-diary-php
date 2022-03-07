<?php

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_ADD_SLASHES);
$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_ADD_SLASHES);
$date = date("Y-m-d h:ia");

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

echo '<script>location.href="../pages/all.php"</script>';
