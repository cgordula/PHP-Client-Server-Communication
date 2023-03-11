<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
	<?php session_start(); ?>
	<?php if(isset($_SESSION['email'])): ?>
		<p>You are logged in as <?php echo $_SESSION['email']; ?>.</p>
		<form method="post" action="./logout.php">
			<input type="submit" value="Logout">
		</form>
	<?php else: ?>
        <h1>Login</h1>
		<form method="post" action="./server.php">
			<label>Email:</label>
			<input type="email" name="email" required><br><br>
			<label>Password:</label>
			<input type="password" name="password" required><br><br>
			<input type="submit" value="Login">
		</form>
	<?php endif; ?>
</body>
</html>
