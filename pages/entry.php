<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Diary</title>
        <link rel="stylesheet" href="../css/index.css">
</head>
<body>
<?php
include "../components/header.php";

$servername = "localhost:3307";
$username = "root";
$password = "";
$db = "diary";

$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id=$_GET["id"];

$sql = "SELECT * FROM entries where id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $description = $row["description"];
        $date = $row["date"];
        $id = $row["id"];
        echo"
    <div>
    <div>
        $name
    </div>
    <div>
    $description
    </div>
    <div>
    $date
    </div>
    <form action='../lib/delete.php' method='POST'>
    <input type='hidden' value='$id' name='id'>
    <input type='submit' value='delete'>
    </form>
    <form action='./update.php' method='POST'>
    <input type='hidden' value='$id' name='id'>
    <input type='hidden' value='$name' name='name'>
    <input type='hidden' value='$description' name='description'>
    <input type='submit' value='update'>
    </form>
    </div>
    ";
    }
} else {
    echo "No Diary Entry";
}

?>
</body>
</html>