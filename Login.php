
<?php
include'header.php';
?>

<?php
include "connection.php"; // database connection

$u_password = $u_email = ""; // user registration variables
$current_page = htmlspecialchars($_SERVER['PHP_SELF']);

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

  if(!empty($_POST["u_email"]) && !empty($_POST["u_password"]))
  {
      $u_email = $_POST["u_email"];  
    $u_password = $_POST["u_password"];
  
  }
    
      else{
    ?>

<?php
    
}
}  

//$sql = "INSERT INTO `users` (`u_password`, `u_email`) VALUES ('$u_password','$u_email')";

$sql="SELECT u_id, u_name from users WHERE u_email='$u_email' and u_password='$u_password'";


if(!empty($u_email) && !empty($u_password))
  {
     $result = $conn->query($sql);
 
if ($result->num_rows == 1) {
    // output data of each row
   $row = $result->fetch_array();
      //  echo "id: " . $row["u_id"]. " - Name: " . $row["u_name"]. "<br>";
    $_SESSION['login'] = true; 
    $_SESSION['u_id'] = $row['u_id']; 
    $_SESSION['u_name'] = $row['u_name']; 
     
  header('Location:user_dash.php');
}       else{
  ?>
Invalid email and password combination!
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
    <h2>Login</h2>
    <form method="post" action="<?php echo $current_page;?>">
      <div class="user-box">
        <input type="text" name="u_email" required="">
        <label>Email</label>
      </div>
      <div class="user-box">
        <input type="password" name="u_password" required="">
        <label>Password</label>
      </div>
    <input type="submit" value="Login" id="submitval"><br><br>
    <div class="reg">
    <a href="register.php">Create a User Account</a>
    </div>
    </form>
  </div>
</body>
</html>





