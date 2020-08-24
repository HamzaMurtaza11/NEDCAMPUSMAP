<?php
    include_once 'source/session.php';
 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
</head>
<body>
      <?php if(!isset($_SESSION['EMAIL_ADDRESS'])) : header("location:logout.php");?> 
     <?php else: ?>

    <?php endif ?> 

    <?php echo "<h1> Welcome ".$_SESSION['USER_NAME']." to DashBoard</h1>"; ?> 

    <h2><a href="logout.php">Logout</a></h2> 
    
    </body>
</html>