<?php

include_once "DB_CONNECTION.php";
$id=$_POST['id'];
$query="DELETE FROM category where id = $id";
$result = mysqli_query($connection,$query);
if ($result){
    header('Location:show_category.php');
}

