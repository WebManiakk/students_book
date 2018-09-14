<?php require_once($_SERVER['DOCUMENT_ROOT'].'/header.php');?>
<?php
$student = new student;
$arResult = $student->get_students();
if($_REQUEST['deleted']){
    $student->delete($_REQUEST['deleted']);
}
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
    <?php foreach($arResult as $arItem){?>
        <tr>
            <td><?=$arItem['name']?></td>
            <td><?=$arItem['lastname']?></td>
            <td><?=$arItem['age']?></td>
            <td><?=$arItem['grup']?></td>
            <td><a href="/update/?id=<?=$arItem['id']?>">редактировать</a><br>
                <a href="?deleted=<?=$arItem['id']?>">Удалить</a>
            </td>
        </tr>
    <?php }?>
</table>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php');?>
