<?php 

session_start();

if(!isset($_SESSION['usuario']))
    header('Location: login.php');

include('header.php'); 

?>

<h1>Protected Content</h1>

<p>Welcome <?php echo $_SESSION['usuario']; ?> </p>

<p><a href="logout.php">Logout</a></p>

<?php include('footer.php'); ?>