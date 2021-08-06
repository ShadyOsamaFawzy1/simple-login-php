<?php 

if($_COOKIE && $_COOKIE['name']){
    header('LOCATION:welcome.php');
}
    ?>
    
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Assignment</title>
</head>

<body>

 <form method="POST" action="login.php">
     <div>
         <label for="email">Email</label>
         <input type="email" name="email" placeholder="Enter your email">
     </div>
     <div>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter your password">
    </div>
    <div>
        <label for="remember_me">Remember me</label>
        <input type="checkbox" value="1" name="remember_me">
    </div>
    <button type="submit">Login</button>
 </form>


</body>

</html>