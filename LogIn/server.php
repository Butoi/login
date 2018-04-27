<?php

$servername= "localhost";
$username = "root";
$password = "";
$database = "db";

$conn = new mysqli($servername,$username,$password,$database);

if($conn->connect_error)
{
	die("Connection failled : "  .$conn->connect_error);
}


   

      if(isset($_POST['submit'])){
          $uName = $_POST['uName'];
          $Email = $_POST['Email'];
          $pass = $_POST['pass'];

    	 if(isset($_POST['uName']) && isset($_POST['Email']) && isset($_POST['pass'])){
	     if(!empty($_POST['uName']) && !empty($_POST['Email'])  && !empty($_POST['pass'])){
    	
            $uName = mysqli_real_escape_string($conn,$uName);
            $Email = mysqli_real_escape_string($conn,$Email);
            $pass  = mysqli_real_escape_string($conn,$pass);


           
          
           
                $query = "INSERT INTO log(uName, Email , pass ) VALUES ('$uName',' $Email','$pass')";
         

             if(mysqli_query($conn,$query) === true){
               echo "<script type='text/javascript'>alert('New record successfuly created.');</script>";
               header("location:index.php");
               }else{
               echo "<script type='text/javascript'>alert('Eror!');</script>";
               }
             }else{
                echo "<script type='text/javascript'>alert('All parameters must to filled in.');</script>";
             }
           }else{
              echo "<script type='text/javascript'>alert('All parameter must be sent.');</script>";
           }
         }
     


?>