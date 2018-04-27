<?php
     include('server.php');

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

                            <label class="p">Type your email</label> <br>
                            <input type="text"  name="Email" placeholder="Type your password"/><br>
                            
                            <label class="p">Type you password </label> <br>
                            <input type="password"  name="pass" placeholder="Type your password"/><br>
                           
                         
                            <input type="submit"  name="submit" value="Create your account"><br>
                            

                            <p class="p">Already a member?</p>
                            <a href="index.php">Log In.</a>
            

                      </form>
               

  

       </section>


       


</body>
</html>