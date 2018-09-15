<?php require_once($_SERVER['DOCUMENT_ROOT'].'/header.php');?>
<?php
$student = new student;
if($_REQUEST['deleted']){
    $student->delete($_REQUEST['deleted']); //якщо є параметр видалення видаляєм студента
}
$arResult = $student->get_students(); // дістаєм список студентів

?>

<div class="dashboard-content">

    <div class="headline buttons primary">
		<h4>Список студентів</h4>
	</div>
<?php if(!empty($arResult)){?>
    <table cellspacing="0">
    <tr>
        <th>Ім'я</th>
        <th>Прізвище</th>
        <th>Вік</th>
        <th>Група</th>
        <th>Дія</th>
    </tr>
    <?php
        foreach($arResult as $arItem){?>
            <tr>
                <td><?=$arItem['name']?></td>
                <td><?=$arItem['lastname']?></td>
                <td><?=$arItem['age']?></td>
                <td><?=$arItem['grup']?></td>
                <td><a class="update" href="/update/?id=<?=$arItem['id']?>">Редагувати</a><br><br>
                    <a class="del" href="?deleted=<?=$arItem['id']?>">Видалити</a>
                </td>
            </tr>
        <?php }
    }else{?>
        Список студентів пустий
    <?php }?>
</table>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php');?>
