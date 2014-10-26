<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?=$title; ?></title>
	</head>
	<body> 
		<? include HOME . DS . 'includes' . DS . 'menu.inc.php'; ?>
		<h1><?=$title; ?></h1>
		<h2>Your message has been saved: </h2>

		<? if(!empty($formData['first_name'])): ?>
			<h3>First name: </h3>
			<p><?=$formData['first_name']; ?></p>
		<? endif; ?>

		<? if(!empty($formData['last_name'])): ?>
			<h3>Last name: </h3>
			<p><?=$formData['last_name']; ?></p>
		<? endif; ?>

		<? if(!empty($formData['email'])): ?>
			<h3>Email: </h3>
			<p><?=$formData['email']; ?></p>
		<? endif; ?>

		<? if(!empty($formData['message'])): ?>
			<h3>Message: </h3>
			<p><?=$formData['message']; ?></p>
		<? endif; ?>

	</body>
</html>