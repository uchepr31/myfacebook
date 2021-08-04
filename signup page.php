<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    echo"<pre>";
    print_r($_POST);
    echo"</pre>";  
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup page.css">
    <title>Facebook | Signup </title>
</head>
<body>
    <div id="bar">
        <div id="fac">Facebook </div>
        <div id="signup-button">Login</div>
    </div>
    <div class="we">
        Sign up to facebook <br><br>
     <form method="post" action="signup page.php">
            <input type="text" name="first_name" id="text" placeholder="First name"><br><br>
            <input type="text"  name="last_name" id="text" placeholder="Last name"><br><br>
        
            <span>Gender:</span> <br>
            <select name="gender" id="text">
                <option >Male</option>
                <option >Female</option>
            </select><br><br>
            <input type="text" id="text"  name="email" placeholder="Email"><br><br>
            <input type="password" id="text"   name="password" placeholder="Password"><br><br>
            <input type="password" id="text"  name="password2" placeholder="Retype Password"><br><br>

            <input type="submit" id="button" value="sign up"><br><br><br>
        </form>
    </div>
    
</body>
</html>