<?php

if(isset($_GET['bid'])){
$bid=$_GET['bid'];

include 'conn.php';


$qry="delete from bloodbank where bid=$bid";
$result=mysqli_query($conn,$qry);

if($result){
    echo"bloodbank Deleted";
    header('Location:editbloodbank.php');
}else{
    echo"ERROR!!";
}
}
?>