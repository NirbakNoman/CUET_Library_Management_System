
<!DOCTYPE HTML> 
<html> 
<head>
 <title>Log In</title>
 <link rel="stylesheet" type="text/css" href="login.css"> 

<style type="text/css">

body {
    background-image: url("image/lib1.jpg");

}

</style>

 </head> 

 <?php
 session_start();
 if($_SESSION['error']==1)
 {
   echo "<p style='color:red'>".$_SESSION['message']."</p>";	
   $_SESSION['error']=0;
 }
 
 ?>
 <body> 

 <div id="l_he">
<br><h>Welcome to CUET Library!!!!</h><br>
</div>

 <div id="Sign-In">
 <fieldset style="width:30%">
 <legend>LOG-IN HERE</legend> 
 <form method="POST" action="login.php"> 
 User <br><input type="text" name="user" size="40"> <br>
 Password <br><input type="password" name="pass" size="40"><br> 
<br> <input id="button" type="submit" name="submit" value="Log-In"> <br>
 </form> 
 <br><a href = "sign_up.html"><input id="button" type="submit" name="submit" value="Sign-In"></a> <br>
 
 

 </fieldset>
 </div>
 </body>
 </html> 

