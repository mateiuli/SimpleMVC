<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title><?php echo $title; ?></title>
	</head>
	<body>
		<? include HOME . DS . 'includes' . DS . 'menu.inc.php'; ?>

		<h1>News articles</h1>
		<? if(empty($articles)): echo 'No articles'; else: ?>
		<? foreach($articles as $article): ?>

			<article>
				<header>
					<h2>
						<a href="<?=get_url('news/details/'.$article['id']); ?>">
							<?=$article['title']; ?>
						</a>
					</h2>
					<p><?=$article['intro']; ?></p>
					<p><a href="<?=get_url('news/details/'.$article['id']); ?>">Continue reading</a></p>
				</header>
				<hr/>
			</article>

		<? endforeach; ?>
		<? endif; ?>
	</body>
</html>