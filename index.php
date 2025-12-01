<?php
// Sample data
$title = "My Website";
$heading = "Welcome";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?></title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 20px;
		}
	</style>
</head>
<body>
	<header>
		<h1><?php echo $heading; ?></h1>
	</header>

	<main>
		<p>Your content goes here</p>
	</main>

	<footer>
		<p>&copy; 2024 My Website</p>
	</footer>
</body>
</html>
