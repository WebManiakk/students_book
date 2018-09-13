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
}
?>
