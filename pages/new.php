<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Diary</title>
        <link rel="stylesheet" href="../css/index.css">
</head>
<body>
<?php
include "../components/header.php";

echo '
<h2 class="page-heading">Write new Diary Entry</h2>

<main>
<form action="../lib/save-new.php" method="POST">
<div class="input-group">
<label>Name:</label>
<input class="input-field" name="name" required type="text">
</div>
<div class="input-group">
<label>Description:</label>
<textarea class="input-field" name="description" required type="text"></textarea>
</div>
<div>
<input class="input-button" type="submit" value="submit">
</div>
</form>
</main>

';

?>
</body>
</html>