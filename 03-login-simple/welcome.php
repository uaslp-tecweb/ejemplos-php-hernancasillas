<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome</h1>
    <?php if (isset($_GET['nombre'])) : ?>
        <p>Your name is: <?php echo $_GET['nombre'] ?> </p>
    <?php endif; ?>
</body>
</html>