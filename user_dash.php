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
            <p>Add a new Restaurant: <a href="user_add.php">Add new Restaurant</a></p>
            <p> Resturants You Addded: </p>
            <?php $user_id = $_SESSION['u_id'];?>
            <?php $sql_rest="SELECT r_id, r_name, r_address from restaurant WHERE `r_by` ='$user_id'";?>
            <?php $result = $conn->query($sql_rest);?>

            <?php if ($result->num_rows >0) 
    {
    // output data of each row
    

    ?>

            <?php
   while($row = $result->fetch_assoc())
   {
       
       
     ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">resurant</th>
                        <th scope="col">Address</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"></th>
                        <th><?php echo $row['r_name']; ?></th>
                        <td><?php  echo $row['r_address']; ?></td>

                    </tr>
                </tbody>
            </table>



            <div class="list">
                    <div class="col-sm-2">

                        <a href="view_review.php?r_id=<?php print $row['r_id']; ?>&r_name=<?php print $row['r_name'];?>&r_address=<?php print $row['r_address'];?>"
                            role="button" class="btn btn-success btn-sm">View Review</a>
                    </div>
                    <div class="col-sm-2">

                        <a href="add_review.php?r_id=<?php print $row['r_id']; ?>&r_name=<?php print $row['r_name'];?>&r_address=<?php print $row['r_address'];?>"
                            role="button" class="btn btn-primary btn-sm">Add Review</a>
                    </div>
                    <div class="col-sm-2">
                    

    <div class="col-sm-2">

                        <a href="delete.php?r_id=<?php print $row['r_id']; ?>&r_name=<?php print $row['r_name'];?>&r_address=<?php print $row['r_address'];?>"
                            role="button" class="btn btn-primary btn-sm">Delete Resturant</a>
                    </div>
                    <div class="col-sm-2">



</div>
                </div>
            </div>

            <?php   
   }
    
} else {
    ?>

            <div class="alert alert-info">
                <strong>Alert!</strong> No restaurants found!. Click above to add a restaurant and review.
                <a href="user_add.php">Add new Restaurant</a>
            </div>

            <?php
}
     ?>
        </div>





    </div>

    </div>
    </div>
    <div class="box1-side">
        <button class="right-button" onclick="window.location.href='index.php'">⟶</button>
    </div>

    </div>



</body>

</html>