<?
class student{
    public $id;
    public $name;
    public $lastName;
    public $group;
    public $age;


    function get_students(){
        $servername = "localhost";
        $username = "root";
        $pass = "";
        $dbname = "students";
        $connect = new mysqli($servername, $username, $pass, $dbname);
        if($connect->connect_error){
            echo $connect->connect_error;
        }else{
            echo "з'єднання успішно встановлено";
            $sql = "INSERT INTO user(name, age, group)
                    VALUES('ivan', '16', 'grypa')";
            if($connect->query($sql) === TRUE){
                echo "student created";
            }else{
                echo "якась хуйна як завжди".mysql_error();
            }
        }
        $connect->close();
    }
}

#include <stdio.h>
#include <stdlib.h>
#define  RMIN 1
#define  RMAX 100
#define  K 6
int main (void)
{
     int numb, answ, k;
     randomize();
     numb = RMIN + random(RMAX - RMIN + 1);
     printf("\n****  Задумано число з проміжку %d..%d – \n"
            "\t\t вгадайте його за %d спроб  ****\n\n", RMIN, RMAX, K);
     for (k = 1;  k <= K;  k++)
    {
        printf("Спроба %d – ",k);
	    scanf("%d", &answ);
	    if(answ == numb)                            /* число вгадано */
          {
              printf("\n\t ***   %d – Ви вгадали!!!   ***", numb);
	          return 0;
          }
	      if(answ > numb)                         /* виведення підказки */
	         printf("\t\t – завелике\n");
	      else
            printf("\t\t – замале\n");
     }
     printf("\n\t***   Ви не вгадали, це число – %d   ***", numb);
     return 0;
}
