<?php 

session_start();

if(!isset($_SESSION['usuario']))
{
    header('Location: login.php');
}
    
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    var_dump($_FILES['archivo']);
    $fuente = $_FILES['archivo']['tmp_name'];
    $destino = 'perfiles/' . $_SESSION['usuario'] . '.png';
    echo 'Moving the file ' . $fuente . ' to ' . $destino;
    move_uploaded_file($fuente, $destino);
}

include('header.php'); 

?>

<h1>Protected Content</h1>

<p>Welcome <strong><?php echo $_SESSION['usuario']; ?></strong> </p>

<br>

<p>Upload a picture of you!</p>

<form method="POST" enctype="multipart/form-data">
    <label>Profile Picture:</label>
    <input type="file" name="archivo">
    <br><br>
    <input type="submit" value="Upload Image">
</form>

<p><a href="logout.php">Logout</a></p>

<?php include('footer.php'); ?>