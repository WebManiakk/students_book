<?php
class student{
    public $id;
    public $name;
    public $lastName;
    public $group;
    public $age;


    function get_students(){
        $servername = "localhost";
        $username = "students";
        $pass = "kCwr4*28";
        $dbname = "students";
        $connect = new mysqli($servername, $username, $pass, $dbname);
        if($connect->connect_error){
            echo $connect->connect_error;
        }else{
            echo "з'єднання успішно встановлено";
        }
        $sql = "INSERT INTO user (name, lastname, age, grup)
        VALUES('ivan', 'ivanov', '16', '2kt-12')";
        if($connect->query($sql) === TRUE){
            echo "created";
        }
        $connect->close();
    }
}
