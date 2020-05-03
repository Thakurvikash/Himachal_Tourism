<?php
$firstName=filter_input(INPUT_POST,'firstName');
$lastName=filter_input(INPUT_POST,'lastName');
$gender=filter_input(INPUT_POST,'gender');
$email=filter_input(INPUT_POST,'email');
$password=filter_input(INPUT_POST,'password');
$number=filter_input(INPUT_POST,'number');
$anumber=filter_input(INPUT_POST,'anumber');
if(!empty($firstName)){
    if(!empty($password)){
        $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="test";
    }
}
//database connection
$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
    die('Connection Failed :(' .mysqli_connect_errorno().')'.mysqli_connect_error());
}else
$sql="Insert into registration(firstName,lastName,gender,email,password,number,anumber)values ('$firstName','$lastName','$gender','$email','$password','$number','$anumber')";
if ($conn->query($sql))
{
    echo "New record is inserted successfully.'"
}
else
{
    echo "Error:".$sql . "<br>". $ conn->error;

}

$conn->close();
else{
    echo "password should not be empty";
    die();

}
else{
    echo "Username should not be empty";
    die();
}

?>
