<?php

$fname='';
$lname='';
$email='';
$pd='';
//process for insert.
$conn= mysqli_connect('localhost','root','','mydatabase') or die(mysqli_error($conn));
if(isset($_POST['submit'])){
    $fname= $_POST['firstname'];
    $lname= $_POST['lastname'];
    $email= $_POST['email'];
    $pd= $_POST['password'];

    $insert="INSERT INTO myrecords(firstname,lastname,email,password)
     VALUES('$fname','$lname','$email','$pd')";
     $sql=mysqli_query($conn,$insert);


     header("location:index2.php");
}


//procces for delete command
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $delete="DELETE FROM myrecords WHERE id=$id";
    $sql=mysqli_query($conn,$delete);
    
    header("location:index2.php");
    
    
}

//proccess for update 

 $conn= mysqli_connect('localhost','root','','mydatabase')
 or die(mysqli_error($conn));

 if(isset($_GET['update'])){
    $id=$_GET['id'];
    $fname= $_GET['firstname'];
    $lname= $_GET['lastname'];
    $email= $_GET['email'];
    $pd= $_GET['password'];

    $update =("UPDATE myrecords SET firstname='$fname', lastname='$lname',
    email='$email', password='$pd' WHERE id='$id'") or die(mysqli_error($conn));
    $sql = mysqli_query($conn,$update);

    header("location:index2.php");
 }
?>