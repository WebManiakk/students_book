<?
$title = 'Учет студентов';
$header = "Общий список студентов";
$id = strtolower(strip_tags(trim($_GET['id'])));
// Инициализация заголовков страницы
switch($id){
	case 'add':
		$title = 'Добавить студента';
		$header = 'Добавить студента';
		break;
	case 'update':
		$title = 'Редактирование';
		$header = 'Редактирование информации о студенте';
		break;
}
