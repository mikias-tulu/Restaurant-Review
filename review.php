<?php
include'header.php';
include "connection.php";
?>

<?php

$quariy = $conn->query("select re_id, review, re_date from review");
while ( $row = mysqli_fetch_array($quariy) ) :

?>
    <main class="py-4 container">
         <div class ="row">
             <div class="column">
                <div class="card">
                    <h4 class="card-header">
                    <hr style="height: 1px">
                    <div class="card-footer"><?php echo $row['review']?></div>
                    </h4>
                    <div class="card-body"><?php echo $row['re_id']?></div>
                    <div class="card-footer"><?php echo $row['review']?></div>
                </div>
            </div>
         </div>
 

<?php
endwhile;
?>

