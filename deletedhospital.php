<?php

if(isset($_GET['phoneno'])){
$phoneno=$_GET['phoneno'];

include 'conn.php';


$qry="delete from hospital where phoneno=$phoneno";
$result=mysqli_query($conn,$qry);

if($result){
    echo"hospital Deleted";
    header('Location:edithospital.php');
}else{
    echo"ERROR!!";
}
}
?>