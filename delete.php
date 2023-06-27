<?php
include("connection.php");
$user_id = $_GET['id'];
$final = "delete from user_data_final_table where user_id = $user_id";
$com = mysqli_query($connection, $final);

if($com)
{
    header('location:fetch.php');
}
?>


<?php
include("connection.php");
// $_POST
$cusId = $_GET['id'];

echo $cusId;

$q = "delete from customer where customer_id = $cusId";

$exc = mysqli_query($con,$q);

if($exc)
{
    header('location:customerData.php');
}
?>
