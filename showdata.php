<html>
    <head>
        <meta charset="UTF-8">
        <title>
        registration form using php and database
        </title>
        <link rel="stylesheet" href="deco.css">
    </head>
    <body>
        <div >
            <?php
            require('config.php');
            $query = "SELECT * FROM info";
            $result = mysqli_query($conn, $query);
            ?>
        </div>
        <div class="table">
            <table border="1" cellspacing="10" cellpadding="10">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>age</th>
                    <th>fname</th>
                    <th>email</th>
                    <th>mobile</th>
                    <th>address</th>
                    <th>password</th>
                </tr>
                <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
                ?>
                <tr>
                    <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                    <td><?php echo $rows['id'];?></td>
                    <td><?php echo $rows['name'];?></td>
                    <td><?php echo $rows['age'];?></td>
                    <td><?php echo $rows['fname'];?></td>
                    <td><?php echo $rows['email'];?></td>
                    <td><?php echo $rows['mobile'];?></td>
                    <td><?php echo $rows['address'];?></td>
                    <td><?php echo $rows['password'];?></td>
                    
                </tr>
            <?php
                }
            ?>   
            </table>
            <a href="http://localhost/phpmyadmin/index.php?route=/table/structure&&server=1&db=task&table=info"> <input type="submit" id="editbtn" value="EDIT DATABASE"></a>
        </div>
    </body>
</html>