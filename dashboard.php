<?php
require('auth_session.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>dashboard page</title>
    </head>
    <body>
        <div class="form">
            <h4>Hey, <?php echo $_SESSION['name']; ?></h4>
            <h4>your age is , <?php echo $_SESSION['age']; ?></h4>
            <h4> <?php echo "your current password -->" . $_SESSION['password']."!"; ?></h4>
            <p> click here to logout<a href="login.html"> LOGOUT</a></p>
        </div>
        show all data <a href="showdata.php">CLICK HERE</a>
    </body>
</html>