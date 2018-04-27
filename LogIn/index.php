<?php

    include('login.php');
?>

<!DOCTYPE html>
<html>
<head>
   <title>Log in system</title>
                               <link rel="stylesheet" type="text/css" href="stylle.css">
                               <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>


       <section class="center">
                 
                 
                      <form action="#" method="POST">

                           
                            <label class="p">Type your username</label><br>
                            <input type="text" name="uName" placeholder="Type your user name"/><br>

                            <label class="p">Type your password </label> <br>
                            <input type="password"  name="pass" placeholder="Type your password"/><br>
                            
                            
                           
                         
                            <input type="submit"  name="criteria" value="LOG IN"><br>
                            

                            <p class="p">Not yet a member?</p>
                            <a href="register.php">Create an account.</a>
            

                      </form>
               

  

       </section>


       
   </div>

</body>
</html>