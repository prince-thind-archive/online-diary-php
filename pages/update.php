<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Diary</title>
        <link rel="stylesheet" href="../css/index.css">
</head>
<body>
<?php
include "../components/header.php";
include "../components/nav-links.php";

$name=$_POST["name"];
$description=$_POST["description"];
$id=$_POST["id"];

echo "
<form action='../lib/update.php' method='POST'>
<label> Name</label>
<input name='name' type='text' value=$name>
<label> Description</label>

<input name='description' type='text' value=$description>
<input name='id' type='hidden' value=$id>
<input type='submit' value='submit'>
</form>
";

?>
</body>
</html>