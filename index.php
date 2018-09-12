<?include 'include/headers.inc.php';?>
<!DOCTYPE html>
<html>
	<head>
		<title><?=$title?></title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<div id="header">
			<span class="slogan">обо всём сразу</span>
		</div>

		<div id="content">
			<h1><?=$header?></h1>
			<?
				include 'class/class.php';
				include 'include/routing.inc.php';
			?>
		</div>

		<div id="nav">
			<h2>Меню</h2>
			<ul>
				<li><a href='index.php'>Список студентов</a></li>
				<li><a href='index.php?id=add'>Добавить нового студента</a></li>
			</ul>
		</div>

		<div id="footer">
			&copy; Администрирование студентов <?=date('Y')?>
		</div>
	</body>
</html>
