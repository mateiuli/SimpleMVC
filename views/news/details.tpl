<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title><?php echo $title; ?> | Article Details</title>
	</head>
	<body>
		<? include HOME . DS . 'includes' . DS . 'menu.inc.php'; ?>

		<h1>News articles</h1>
		<article>
			<header>
				<h2>
					<?=$title; ?>
				</h2>
				<p>Published on: <time pubdate="pubdate"><?=$pubdate; ?></time></p>
				<p><?=$article; ?></p>
			</header>
			<hr/>
		</article>
	</body>
</html>