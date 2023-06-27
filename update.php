<?php
include("connection.php");
$userid = $_GET['id'];
$data = "select * from user_data_final_table where user_id = $userid";
$data2 = mysqli_query($connection,$data);
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
    <div class="container mt-5">
        <form method="POST" >
        <input type="username" value="<?php echo $data1['user_name']?>" class="form-control" name="name">
        <br>
        <input type="useremail"  value="<?php echo $data1['user_email']?>" class="form-control" name="email">
        <br>
        <input type="phonenumber"  value="<?php echo $data1['user_number']?>" class="form-control" name="number">
        <br>
        <input type="location"  value="<?php echo $data1['user_location']?>" class="form-control" name="location">
        <br>
        <input type="site"  value="<?php echo $data1['user_site']?>" class="form-control" name="site">
        <br>
        <button class="btn btn-success" name="update-btn">UPDATE</button>
        </form>
    </div>
</body>
</html>
<?php
if(isset($_POST['update-btn'])){
    $user_name = $_POST['name'];
    $user_email = $_POST['email'];
    $user_number = $_POST['number'];
    $user_location = $_POST['location'];
    $user_site = $_POST['site'];
    $update = "update user_data_final_table set user_name = '".$user_name."', user_email = '".$user_email."', user_number = '".$user_number."', user_location = '".$user_location."',user_site = '".$user_site."'";
      $fnl= mysqli_query($connection, $update );
      if($fnl)
      {
          header('location:fetch.php');
      }
}
?>

