<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<ul>
		<?php for($i=100; $i<=104; $i++): ?>
			<li><a href="email-<?php echo $i ?>.php">Email <?php echo $i ?></li>
		<?php endfor ?>
	</ul>
</body>
</html>