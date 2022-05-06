
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY DATABASE</title>
    <link rel="stylesheet" href="database.css">
</head>
<body>
    <?php require_once 'proccesses.php'; ?>
    <div class="container">
        <?php

        $conn= mysqli_connect('localhost','root','','mydatabase');
        $select="SELECT * FROM myrecords";
        $sql=mysqli_query($conn,$select);
        ?>
        <table border="1">
             <thead>
               <th>Names</th>
               <th>Emails</th>
               <th>Passwords</th>
               <th colspan="2">Actions</th>
             </thead>
             
        <?php
        while($row=mysqli_fetch_array($sql)){?>
        <tr>
        <td><?php echo $row['firstname'];?>&nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $row['lastname'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['password'];?></td>
        <td><a href="update.php?id=<?php echo $row['id']?>" id="edit-btn">Edit</a></td>
        <td><a href="index2.php?delete=<?php echo $row['id']?>" id="delete-btn">Delete</a></td>
        </tr>
       <?php }?>

        </table>

    <form  method="post" class="form-box">
        <input type="text" name="firstname" 
         placeholder="First name.."><br>
        <input type="text" name="lastname" 
         placeholder="Last name.."><br>
        <input type="email" name="email" 
         placeholder=" Your Email.."><br>
        <input type="password" name="password" 
         placeholder="Password..."><br>
        <button type="submit" name="submit">Save</button>
    </form>
    </div>
</body>
</html>