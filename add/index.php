<?php require_once($_SERVER['DOCUMENT_ROOT'].'/header.php');
$student = new student;?>
<div class="dashboard-content">
    <div class="headline buttons primary">
		<h4>Форма добавления нового студента</h4>
	</div>
    <div class="form-box-items">
        <div class="form-box-item">
        	<h4>Добавити</h4>
        	<hr class="line-separator">
        	<form action="">
        		<!-- INPUT CONTAINER -->
        		<div class="input-container">
                    <label for="first_name" class="rl-label">Ім'я</label>
                    <input type="text" id="first_name" name="name" value="" placeholder="Введіть Ім'я">
        		</div>

        		<div class="input-container">
                    <label for="last_name" class="rl-label">Прізвище</label>
                    <input type="text" id="last_name" name="lastname" value="" placeholder="Введіть прізвище">
        		</div>

        		<div class="input-container">
                    <label for="age" class="rl-label">Вік</label>
                    <input type="text" id="age" name="age" value="" placeholder="Введіть вік">
        		</div>

        		<div class="input-container">
                    <label for="grup" class="rl-label">Група</label>
                    <input type="text" id="grup" name="grup" value="" placeholder="Введіть групу">
        		</div>
                <button type="submit" class="button mid-short primary">Зберегти зміни</button>
        	</form>
            <?php
            if($_REQUEST){
                $student->add_students($_REQUEST['name'], $_REQUEST['lastname'], $_REQUEST['age'], $_REQUEST['grup']);
            };?>
        </div>
    </div>
</div>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php');?>
