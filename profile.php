<?php	
include 'header.php';
include "connection.php";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/form.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/elements.css">
    <script src="script.js"></script>
</head>

<body>


    <div class="box-container">
        <div class="box1-content content">
            <h1>Hello, <?php echo $_SESSION['u_name']; ?></h1>
            <p>Edit your Profile: </p>
            <p> Current Profile fields: </p>
            <?php $user_id = $_SESSION['u_id'];?>
            <p>Name: <?php echo $_SESSION['u_name']; ?></P>


      <form method="post" action="<?php echo $current_page;?>">
      <div class="box">
      <label>Name</label><input type="text" name="u_name" required="">
      </div>
      <input type="submit" value="submit" ><br><br>
      </form>
  
<?php
$current_page = htmlspecialchars($_SERVER['PHP_SELF']); ?>
<?php $uname=$_POST['u_name']; ?>
<?php $user_id = $_SESSION['u_id']; ?>

     <?php $sql = "UPDATE users SET u_name='$uname' WHERE u_id='$user_id'";
 $conn -> query($sql); ?>

   
 
</body>

</html>