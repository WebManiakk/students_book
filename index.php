<?php require_once($_SERVER['DOCUMENT_ROOT'].'/header.php');?>
<?php
$student = new student;
$student->get_students();
?>
<div class="dashboard-content">
    <div class="headline buttons primary">
		<h4>Список студентов</h4>
	</div>

    <table cellspacing="0">
    <tr>
        <th>Ім'я</th>
        <th>Прізвище</th>
        <th>Вік</th>
        <th>Група</th>
        <th>Действие</th>
    </tr>
    <tr>
        <td>Etiam dolor</td>
        <td>100%</td>
        <td>Нет</td>
        <td>Нет</td>
        <td><a href="#">редактировать</a><br>
            <a href="#">Удалить</a>
        </td>
    </tr>
    <tr>
        <td>Etiam dolor</td>
        <td>100%</td>
        <td>Да</td>
        <td>Да</td>
    </tr>
    <tr>
        <td>Etiam dolor</td>
        <td>50%</td>
        <td>Да</td>
        <td>Да</td>
    </tr>
    <tr>
        <td>Etiam dolor</td>
        <td>0%</td>
        <td>Да</td>
        <td>Да</td>
    </tr>
    <tr>
        <td>Etiam dolor</td>
        <td>100%</td>
        <td>Да</td>
        <td>Да</td>
    </tr>
</table>
</div>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php');?>
