<?php

if(isset($_GET['bloodtype'])){
$bloodtype=$_GET['bloodtype'];

include 'conn.php';


$qry="delete from blooddonor where bloodtype=$bloodtype";
$result=mysqli_query($conn,$qry);

if($result){
    echo"DELETED";
    header('Location:deletedonor.php');
}else{
    echo"ERROR!!";
}
}
?>