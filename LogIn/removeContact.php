<?php
if(isset($_GET['id'])){
$id=$_GET['id'];
require 'contact1.php';
$query="DELETE FROM log WHERE id = {$id} ";
mysqli_query($conn,$query);
header("Location: index1.php");
}