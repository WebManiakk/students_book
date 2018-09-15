<?php // незнаю чого, коротка форма запису не працює
class student{
    //параметри підключення до бд
    public $servername = "localhost";
    public $username = "students";
    public $pass = "kCwr4*28";
    public $dbname = "students";

    //метод добавлення нового студента
    function add_students($name, $lastname, $age, $grup){
        if(strlen($name) && strlen($lastname) && strlen($age) && is_numeric($age) && strlen($grup)){ //перевірка на пустоту полів
            $connect = new mysqli($this->servername, $this->username, $this->pass, $this->dbname);

            //екрануєм строки
            $name = $connect->real_escape_string($name);
            $lastname = $connect->real_escape_string($lastname);
            $grup = $connect->real_escape_string($grup);

            $sql = "INSERT INTO user (name, lastname, age, grup)
            VALUES('".$name."', '".$lastname."', '".$age."', '".$grup."')";
            if($connect->query($sql) === TRUE){
                echo "<p style=\"color:green\">Студент успішно доданий</p>";
            }else{
                echo "<p style=\"color:red\">Виникла помилка, попробуйте ще раз</p>";
            }
            $connect->close();
        }else{
            echo "<p style=\"color:red\">Заповніть коректно усі поля та спробуйте ще раз</p>";
        }

    }

    //отримуєм список студентів
    function get_students(){
        $connect = new mysqli($this->servername, $this->username, $this->pass, $this->dbname);
        $sql = "SELECT * FROM user";
        $arResult = $connect->query($sql);
        if($arResult->num_rows > 0){
            while($row = $arResult->fetch_assoc()){
                $arItem[] = $row;
            }
        }
        return $arItem;
        $connect->close();
    }

    //отримуєм поточного студента
    function get_student($id){
        $connect = new mysqli($this->servername, $this->username, $this->pass, $this->dbname);
        $sql = "SELECT * FROM user WHERE id = '".$id."'";
        $arResult = $connect->query($sql);
        if($arResult->num_rows > 0){
            if($row = $arResult->fetch_assoc()){
                $arItem = $row;
            }
        }
        return $arItem;
        $connect->close();
    }

    //метод редагування студента
    function update($id, $name, $lastname, $age, $grup){
        if(strlen($name) && strlen($lastname) && strlen($age) && is_numeric($age) && strlen($grup)){
            $connect = new mysqli($this->servername, $this->username, $this->pass, $this->dbname);

            $name = $connect->real_escape_string($name);
            $lastname = $connect->real_escape_string($lastname);
            $grup = $connect->real_escape_string($grup);

            $sql = "UPDATE user SET name='".$name."',lastname='".$lastname."', age='".$age."', grup='".$grup."' WHERE id = '".$id."'";
            if($connect->query($sql) === TRUE){
                return "<p style=\"color:green\">Зміни успішно збережені</p>";
            }
            $connect->close();
        }else{
            return "<p style=\"color:red\">Заповніть коректно усі поля та спробуйте ще раз</p>";
        }

    }

    //видалення
    function delete($id){
        $connect = new mysqli($this->servername, $this->username, $this->pass, $this->dbname);
        $sql = "DELETE FROM user WHERE id = '".$id."'";
        $connect->query($sql);
        $connect->close();
    }
}
