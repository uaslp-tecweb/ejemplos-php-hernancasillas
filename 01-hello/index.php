<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Hello</title>
</head>
<body>
    <?php if(isset($_GET['nombre']) === false){
        echo '
        <form>
        <input name="name" type="text">
        <button type="submit">Say Hi</button>
        </form>
        ';
    }
    else{
        echo '
        <h1>Server Response</h1>
        ';
        echo 'Hello ' . $_GET['name'];
        echo '<p>Footer</p>';
        for ($i = 0; $i < 3; $i++)
        {
            echo 'This message is after the footer';
        }
    }
    
    
    
        
    ?>
</body>
</html>

