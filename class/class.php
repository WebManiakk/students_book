<?php
class student{

    function add_students($name, $lastname, $age, $grup){
        $servername = "localhost";
        $username = "students";
        $pass = "kCwr4*28";
        $dbname = "students";
        $connect = new mysqli($servername, $username, $pass, $dbname);
        if($connect->connect_error){
            echo $connect->connect_error;
        }else{

        }
        $sql = "INSERT INTO user (name, lastname, age, grup)
        VALUES('".$name."', '".$lastname."', '".$age."', '".$grup."')";
        if($connect->query($sql) === TRUE){
            echo "<p style=\"color:green\">Студент успішно доданий</p>";
        }
        $connect->close();
    }

    function get_students(){
        $servername = "localhost";
        $username = "students";
        $pass = "kCwr4*28";
        $dbname = "students";
        $connect = new mysqli($servername, $username, $pass, $dbname);
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

    function get_student($id){
        $servername = "localhost";
        $username = "students";
        $pass = "kCwr4*28";
        $dbname = "students";
        $connect = new mysqli($servername, $username, $pass, $dbname);
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

    function update($id, $name, $lastname, $age, $grup){
        $servername = "localhost";
        $username = "students";
        $pass = "kCwr4*28";
        $dbname = "students";
        $connect = new mysqli($servername, $username, $pass, $dbname);
        $sql = "UPDATE user SET name='".$name."',lastname='".$lastname."', age='".$age."', grup='".$grup."' WHERE id = '".$id."'";
        if($connect->query($sql) === TRUE){
            echo "палучілась";
        }

        $connect->close();
    }

    function delete($id){
        $servername = "localhost";
        $username = "students";
        $pass = "kCwr4*28";
        $dbname = "students";
        $connect = new mysqli($servername, $username, $pass, $dbname);
        $sql = "DELETE FROM user WHERE id = '".$id."'";
        if($connect->query($sql) === TRUE){
            echo "палучілась";
        }
        $connect->close();
    }
}
?>
