<?php require_once($_SERVER['DOCUMENT_ROOT'].'/header.php');?>
<?php if($_REQUEST['id']){
    $student = new student;
    $arResult = $student->get_student($_REQUEST['id'])?>

<div class="dashboard-content">
    <div class="headline buttons primary">
		<h4>Форма редактирования студента</h4>
	</div>
    <div class="form-box-items">
        <div class="form-box-item">
        	<h4>Редактировать</h4>
        	<hr class="line-separator">
        	<form id="profile-info-form">
        		<!-- INPUT CONTAINER -->
                <input type="hidden" name="id" value="<?=$_REQUEST['id']?>">
                <input type="hidden" name="update" value="Y">
        		<div class="input-container">
                    <label for="first_name" class="rl-label">Ім'я</label>
                    <input type="text" id="first_name" name="name" value="<?=$arResult['name']?>" placeholder="Введіть ваше Ім'я">
        		</div>

        		<div class="input-container">
                    <label for="last_name" class="rl-label">Прізвище</label>
                    <input type="text" id="last_name" name="lastname" value="<?=$arResult['lastname']?>" placeholder="Введіть ваше прізвище">
        		</div>

        		<div class="input-container">
                    <label for="new_email" class="rl-label">Вік</label>
                    <input type="text" id="new_email" name="age" value="<?=$arResult['age']?>" placeholder="Введіть вашу електронну адресу">
        		</div>

        		<div class="input-container">
                    <label for="personal_phone" class="rl-label">Група</label>
                    <input type="text" id="personal_phone" name="grup" value="<?=$arResult['grup']?>" placeholder="Введіть ваш телефон">
        		</div>
                <button type="submit" class="button mid-short primary">Зберегти зміни</button>
                <?php if($_REQUEST['update']){
                    $student->update($_REQUEST['id'], $_REQUEST['name'], $_REQUEST['lastname'], $_REQUEST['age'], $_REQUEST['grup']);
                }?>
        	</form>
        </div>
    </div>
</div>
<?php }else{
header("Location:/");
}?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php');?>
