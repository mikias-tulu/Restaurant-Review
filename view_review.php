
    
    <?php	
include "header.php";
    include "connection.php";
?>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/elements.css">
<link rel="stylesheet" href="css/header.css">

    
 <div class="container"> 
    
 <div class="jumbotron other-color">
<a href="user_dash.php" role="button" class="btn btn-success glyphicon glyphicon-home"> Home</a>
      
<h2>Hi <?php echo $_SESSION['u_name']; ?></h2>    
     
     
   	 <?php
     if(isset($_GET['r_id']) && isset($_GET['r_name']) && isset($_GET['r_address']))
        {
            $r_id = $_GET['r_id'];
            $r_name = $_GET['r_name'];
            $r_address = $_GET['r_address'];
			//echo $place_id;
     
        }
        else
        {
           echo "No resources available";
        }
      ?>
     
     
     <?php $user_id = $_SESSION['u_id'];?>
     <?php $sql_rest="SELECT re_id, review, re_date from review ";?>
      <?php $result = $conn->query($sql_rest);?>
  



<?php

$quariy = $conn->query("select re_id, review, re_date from review");
while ( $row = mysqli_fetch_array($quariy) ) :

?>
    <main class="py-4 container">
         <div class ="row">
             <div class="column">
                <div class="card">
                    <h4 class="card-header">
                        <p>Review Detail</p>
                    </h4>
                    <div class="card-body"><?php echo $row['re_id']?></div>
                    <div class="card-footer"><?php echo $row['review']?></div>
                    <div class="card-footer"><?php echo $row['re_date']?></div>
                </div>
            </div>
         </div>
 

<?php
endwhile;
?>
