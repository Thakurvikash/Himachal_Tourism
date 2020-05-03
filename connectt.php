<?php
$user='root';
$pass='';
$db='test';
$db=new mysqli('localhost',$user,$pass,$db) or die("Unable to Connect");
echo "<h1>Great Work!!<h1>";

$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];
$number=$_POST['number'];
$anumber=$_POST['anumber'];

$sql= "INSERT INTO rigistration(firstName,lastName,gender,email,password,number,anumber)
VALUES('$firstName','$lastName','$gender','$email','$password','$number','$anumber')";
if (!mysqli_query ($db,$sql))
{
    echo"Not Inserted";
    
}
else{
    echo"<h2>Congratulation $!! Succesfully Registered Thank You for Visiting</h2>
    <br><h2> We would shortly connect to you!!</h2>
    <br>
   <hr> Please Wait for 20 Seconds we are processing your data.</h2><br><h1>Thank You!!</h1>";

}
header("refresh:20;url =final one.html");

?>