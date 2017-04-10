<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<?php
require_once ('models/db.php');
$connect = new db();
$db = $connect->dbconnect();
$sql="SELECT fullname, email, addressline1, city, state, zip, birthday FROM address";
$stmt = $db->query($sql);
?>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title> </title>
    <a href='templates/view-address.html.php?'>add a new one</a>

    </head>
    
    <body>
        <table class="table table-inverse ">
            <tr><td>Full Name</td><td>Email</td><td>AddressLine1</td><td>City</td><td>State</td><td>Zip</td><td>Birthday</td><tr>
            <?php while($row = $stmt->fetch (PDO::FETCH_ASSOC)) {
            ?>
                <tr>
                    <td><?php echo $row['fullname']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['addressline1']?></td>
                    <td><?php echo $row['city']?></td>
                    <td><?php echo $row['state']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['birthday']?></td>
                  
                </tr>

            <?php
            }
            ?> 
        </table>

    </body>
</html>
