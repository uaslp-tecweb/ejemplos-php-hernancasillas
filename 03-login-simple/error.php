<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Error</title>
</head>
<body>
    <h1>Error on Login</h1>
    <?php
        echo $_GET['desc'];
    ?>
    <a href="index.php">Vuelve a intentarlo</a>
</body>
</html>