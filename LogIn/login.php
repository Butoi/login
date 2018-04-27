<?php


$servername= "localhost";
$username = "root";
$password = "";
$database = "db";

    @mysql_connect($servername, $username,$password);
    mysql_select_db($database);

     if(isset($_POST['criteria'])){
         $uName = $_POST['uName'];
         $pass = $_POST['pass'];
        

         $sql = "SELECT * FROM log WHERE uName  = '".$uName."' AND pass =  '".$pass."' limit 1";
         $result = mysql_query($sql);

        $rows = $result;
          
                        if(mysql_num_rows($rows) == 1){
                       
                         
                          
                      header("Location: index1.php");
                         
                            exit();
                        }

                        else {
                          echo "<script type='text/javascript'>alert('Type your username and password!');</script>";
                        }
                      }

                      

?>