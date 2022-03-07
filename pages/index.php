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

echo "
<h2 class='page-heading'>Welcome to Online Diary</h2>

<main>
<p class='welcome-para'>In this Website you can create new diary entries, see all your previous diary entries. Update your existing diary entries and also delete diary entries that you don't like.</p>

<a href='./all.php' class='browse-all'>Browse All</a>
</main>
";

?>
</body>
</html>