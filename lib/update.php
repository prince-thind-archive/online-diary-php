<?php

$name = $_POST["name"];
$description = $_POST["description"];
$id = $_POST["id"];
$date = time();


$servername = "localhost:3307";
$username = "root";
$password = "";
$db = "diary";

$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "update entries set name='$name', description='$description' where id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


echo "<script>location.href='../pages/entry.php?id=$id'</script>";
