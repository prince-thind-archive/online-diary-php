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

$name=$_POST["name"];
$description=$_POST["description"];
$id=$_POST["id"];

if($id==''){
echo "<script>location.href='../pages/all.php'</script>";
}

echo "
<h2 class='page-heading'>Update Diary Entry</h2>

<main>
<form action='../lib/update.php' method='POST'>
<div class='input-group'>
<label>Name:</label>
<input value='$name' class='input-field' name='name' required type='text'>
</div>
<div class='input-group'>
<label>Description:</label>
<textarea class='input-field' name='description' required type='text'>$description</textarea>
</div>
<div>
<input type='hidden' name='id' value=$id>;
<input class='input-button' type='submit' value='submit'>
</div>
</form>
</main>

";

?>
</body>
</html>