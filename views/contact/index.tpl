<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?=$title; ?></title>
	</head>
	<body> 
		<? include HOME . DS . 'includes' . DS . 'menu.inc.php'; ?>
		<h1><?=$title; ?></h1>

		<? if(isset($errors)): ?>
			<ul>
			<? foreach($errors as $error): ?>
				<li><?=$error; ?></li>
			<? endforeach; ?>
			</ul>
		<? endif; ?>

		<? if(isset($saveError)): ?>
			<h3>Error saving data. Please try again.</h3>
			<p><?=$saveError; ?></p>
		<? endif; ?>

		<form action="<?=get_url('contact/save'); ?>" method="post">
			<table>
				<tr>
					<td><label for="first_name">First name: </label></td>
					<td><input value="<?=isset($formData) ? $formData['first_name'] : '' ;?>" name="first_name" id="first_name" type="text" /></td>
				</tr>
				<tr>
					<td><label for="last_name">Last name: </label></td>
					<td><input value="<?=isset($formData) ? $formData['last_name'] : '' ;?>" name="last_name" id="last_name" type="text" /></td>
				</tr>
				<tr>
					<td><label for="email">Email: </label></td>
					<td><input value="<?=isset($formData) ? $formData['email'] : '' ;?>" name="email" id="email" type="text" /></td>
				</tr>
				<tr>
					<td><label for="message">Message: </label></td>
					<td><textarea name="message" id="message"><?=isset($formData) ? $formData['message'] : '' ;?></textarea></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" name="contactFormSubmit" value="Send" />
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>