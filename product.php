<?php 

	if ($_GET['product'] == 1) {
		$operatingSystem = 'Macbook';
	} else if ($_GET['product'] == 2) {
		$operatingSystem = 'Ubuntu';
	} else if ($_GET['product'] == 3) {
		$operatingSystem = 'Windows';
	} else {
		$operatingSystem = 'Unknown Operating System';
	}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Business Site</title>
		<link rel="stylesheet" href="../css/main.css">
	</head>
	<body>
		
		<?php require_once'header.php' ?>

		<h1>You chose the <?php echo $operatingSystem; ?></h1>

		<?php require_once 'footer.php' ?>

	</body>
</html>