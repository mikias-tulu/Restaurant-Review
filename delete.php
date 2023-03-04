<?php	
include 'header.php';
    include "connection.php";
?>
<?php


$r_namematch= $_SESSION['r_id'];
$result = $conn->query("DELETE FROM restaurant WHERE r_name='$r_namematch' ");

    if($result){
   	echo "Resturant is DELETED!!!";
    header( "refresh:5;url=user_dash.php" );
    }
?>