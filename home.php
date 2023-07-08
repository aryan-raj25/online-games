<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
// header("Location: numguess/index.html")
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?> Choose any game</h1>
     <a href="numguess/index.html">Numguess Game</a>
     <a href="tictactoe/index.html">Tic Tac Toe Game</a>
     <a href="logout.php">Logout</a>
</body>
</html> 

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>