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
include "../components/nav-links.php";

$servername = "localhost:3307";
$username = "root";
$password = "";
$db = "diary";

$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM entries";
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
        <a href='./entry.php?id=$id'>$name</a>
    </div>
    <div>
    $description
    </div>
    <div>
    $date
    </div>
    </div>
    ";
    }
} else {
    echo "No Diary Entries";
}

?>
</body>
</html>