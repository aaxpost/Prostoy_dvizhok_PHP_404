<!DOCTYPE html>
<!--layout.php 45.10.2-->
<html>
	<head>
		<?php include 'elems/head.php'; ?>
		<title><?= $title ?></title>
	</head>
	<body>
		<div id="wraper">
			<header>
				<?php include 'elems/header.php'; ?>
			</header>
			<main>
				<?php echo $content; ?>
			</main>
			<footer>
				<?php include 'elems/footer.php'; ?>
			</footer>
		</div>
	</body>
</html>
