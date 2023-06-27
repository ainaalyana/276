<?php
include("connection.php");
$gettingid=$_GET['id'];
$data = "select * from user_data_final_table where user_id = $gettingid";
$data2 = mysqli_query($connection, $data );
$data1 = mysqli_fetch_array($data2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <input type="text" value="<?php echo $data1['user_name']?>">
    <input type="text" value="<?php echo $data1['user_email']?>">
    <input type="text" value="<?php echo $data1['user_number']?>">
    <input type="text" value="<?php echo $data1['user_location']?>">
    <input type="text" value="<?php echo $data1['user_site']?>">
    <button></button>
    
</body>
</html>