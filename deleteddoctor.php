<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'conn.php';


$qry="delete from doctor where id=$id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"doctor Deleted";
    header('Location:editdoctor.php');
}else{
    echo"ERROR!!";
}
}
?>