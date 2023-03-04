<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gebeta | Ethiopian Review</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/elements.css">
</head>

<body>

    <?php	
    include "connection.php";
    include "session.php"; 
?>

    <?php if(isset($_SESSION['u_id']) && !empty($_SESSION['u_id']) )
	{ ?>

    <header id="header">
        <h2>Gebeta.com</h2>
        <details class="dropdown" id="dp">
                <summary role="button">
                    <a class="button"><?php echo $_SESSION['u_name']; ?></a>
                </summary>
                <ul>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="logout.php"> Log out</a></li>
                </ul>
            </details>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="review.php">All review</a></li>
                <li><a href="services.php">Services</a></li>
                
                <li><a href="about.php">About Us</a></li>
            </ul>
            
        </nav>

    </header>

    <?php 
    
  } 
      
  else { ?>


    <header id="navbar">
        <h2>Gebeta.com</h2>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="review.php">All review</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </nav>
        <button style="text-align:center;">Contact</button>
    </header>


    <?php
           }
      ?>




    </div>
    </nav>



</body>

</html>