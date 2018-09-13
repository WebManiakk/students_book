<?php require_once($_SERVER['DOCUMENT_ROOT'].'/header.php');?>
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
        		<div class="input-container">
                    <label for="first_name" class="rl-label">Ім'я</label>
                    <input type="text" id="first_name" value="" placeholder="Введіть ваше Ім'я">
        		</div>

        		<div class="input-container">
                    <label for="last_name" class="rl-label">Прізвище</label>
                    <input type="text" id="last_name" value="" placeholder="Введіть ваше прізвище">
        		</div>

        		<div class="input-container">
                    <label for="new_email" class="rl-label">Вік</label>
                    <input type="email" id="new_email" name="" value="akweb.com.ua@gmail.com" placeholder="Введіть вашу електронну адресу">
        		</div>

        		<div class="input-container">
                    <label for="personal_phone" class="rl-label">Група</label>
                    <input type="text" id="personal_phone" value="" placeholder="Введіть ваш телефон">
        		</div>
                <button type="submit" class="button mid-short primary">Зберегти зміни</button>
        	</form>
        </div>
    </div>
</div>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php');?>
