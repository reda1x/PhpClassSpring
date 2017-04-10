<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<style>
    h2 {
        color: red;
    }
    h3 {
        color: green;
    }
</style>
<head>
        <meta charset="UTF-8">
        <title> </title>
<a href='../index.php?'>INDEX</a>

    </head>
<?php
include '../models/states.php'
?>

<form actionn ="" method ="post" >
    <table class ='table '>
        <tr>   <td> fullname: </td> <td><input type ='text' name='fullname' value='' /></td> </tr>

        <tr> <td>email: </td><td><input type ='text' name='email' value='' /></td>

        <tr> <td>addressline1:</td> <td><input type ='text' name='addressline1' value='' /></td></tr>
        <tr>  <td>city: </td><td><input type ='text' name='city' value='' /></td></tr>
        <tr> <td>State:</td> <td>
                <select name="state" >
                    <?php foreach ($states as $key => $value): ?> 
                        <option value="<?php echo $key; ?>" <?php if ($selectedState == $key): ?> selected="selected" <?php endif; ?>><?php echo $value; ?></option>
                    <?php endforeach; ?>
                </select></td></tr>
        <tr> <td>zip: </td><td><input type ='text' name='zip' value='' /></td></tr>

        <tr> <td>birthday: </td><td><input type ='date' name='birthday' value='' /></td></tr>


        <tr>  </tr>
    </table>
    <input type ='submit' value='submit' class="btn btn-primary" > 
</form>
<?php
?>

