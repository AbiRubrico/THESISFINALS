<?php
include 'config.php';
session_start();

if(isset($_POST['add'])){

    $item = mysqli_real_escape_string($connect, $_POST['item']);
    $brand = mysqli_real_escape_string($connect, $_POST['brand']);
    $descript = mysqli_real_escape_string($connect, $_POST['descript']);
    $price = mysqli_real_escape_string($connect, $_POST['price']);
	$quant = mysqli_real_escape_string($connect, $_POST['quant']);

    $addEntry = "INSERT INTO item (item,brand,description,
	unitprice,quantity) values ('$item','$brand','$descript','$price','$quant')";

    $registeredEntry = mysqli_query($connect, $addEntry);   
        echo "<script>
              alert('Entry Added Successfully');
              window.location.href='LeasingOfficerModule_Supplies.php';
              </script>";
}
?>