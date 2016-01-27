<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>фотогалерея</title>
</head>
<body>
	<ul>
		<? foreach ($images as $image):?>
		<li>
			<strong><? echo $image['title']; ?></strong>
			<img src="/img/<?php echo $image['file']; ?>">
		</li>
		<? endforeach; ?>
	</ul>
<?php include('form.php'); ?>
	
</body>
</html>