<?php
 $con=new mysqli('localhost','root','','crud');

 if($con){
    echo "";
 }
 else{
    die(mysqli_error($con));
 }
?>