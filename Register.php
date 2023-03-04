<?php
include'header.php';

?>


<?php
include "connection.php"; // database connection

$u_name = $u_password = $u_email = ""; // user registration variables
$current_page = htmlspecialchars($_SERVER['PHP_SELF']);

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

  //First name validation
  if(!empty($_POST["u_name"]) && !empty($_POST["u_email"]) && !empty($_POST["u_password"]))
  {
      $u_name = $_POST["u_name"];
   $u_email = $_POST["u_email"]; 
     $u_password =$_POST["u_password"];
}
    else{
    ?>
<div class="alert alert-danger">
  <strong>Alert!</strong> Please Complete all fields.
</div>
<?php
    
}
}



$sql = "INSERT INTO `users` (`u_name`, `u_password`, `u_email`) VALUES ('$u_name','$u_password','$u_email')";


if(!empty($u_name) && !empty($u_email) && !empty($u_password))
  {
if ($conn->query($sql) === TRUE) {
   header('Location:login.php');
} else {
  ?>
 Email Id already registered.
<?php
}
}

$conn->close();

?>



<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/form.css"> 
  <link rel="stylesheet" href="css/index.css">

  <title>Login</title>

</head>
<body>
  
  <div class="login-box">
    <h2>Register</h2>
    <form method="post" action="<?php echo $current_page;?> ">
      <div class="user-box">
        <input type="text" name="u_name" required="">
        <label>Name</label>
      </div>
      <div class="user-box">
        <input type="text" name="u_email" required="">
        <label>Email</label>
      </div>
      <div class="user-box">
        <input type="password" name="u_password" required="">
        <label>Password</label>
      </div>
    <input type="submit" value="Register"><br><br>
    <div class="reg">
    <a href="Login.php">Already have an Account?</a>
    </div>
    </form>
  </div>
</body>
</html>





