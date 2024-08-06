<?php
include("include/connection.php")
$username ="localhost";
$servername ="root";
$passward ="";
$database ="contact detail";
$conn = mysqli_connect($username,$servername,$passward,$database);
if(!$conn)
{
    die("sorry we failed to connect :".mysqli_connect_error());
}
else{
    echo "connection was successful";
    echo "<br>";
    }
    if(isset($_POST['submit']))
{
    
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $passward=$_POST_['password'];
    $confirmpassword=$_POST['confirmpassword'];
    $gender=$_POST['gender'];
    $country=$_POST['country'];
    $sql_query="INSERT INTO information(firstname,lastname,email,password,confirmpassword,gender,country) VALUES ('$firstname','$lastname','$email','$password','$confirmpassword','$gender','$country')";
}
    if(mysqli_query($conn,$sql_query))
    {
        echo "new detail enter successfuly";
    }
    else{
        echo "error".$sql."".mysqli_error($conn);
    }
    mysqli_close($conn);


?>