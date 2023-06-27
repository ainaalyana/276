<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .main{
            height: 70px;
            width: 100%;
            background-color: black;
        }
        #bell{
            animation: spin 2s linear infinite;
            transition: 2s;
        }
        @keyframes spin{
            0%{
                transform: rotate(0deg) ;
            }
            25%{
                transform: rotate(-20deg) ;
            }
            50%{
                transform: rotate(0deg) ;
            }
            75%{
                transform: rotate(-20deg) ;
            }
            100%{
                transform: rotate(0deg) ;
            }
        }
        #img{
            animation: rotate 2s linear infinite;
            transition: 2s;
        }
        @keyframes rotate{
            from{
               transform: scale(1.0);
               border: 1px solid red;
            }
            to{
                transform: scale(1.1);
                border: 5px solid red;
            }
        }

        @media screen and (max-width:375px){
            #head{
                font-size: 20px;
            }
        }
        @media screen and (max-width:414px){
            #head{
                font-size: 20px;
            }
        }
        @media screen and (max-width:540px){
            #head{
                font-size: 20px;
            }
        }
        .bell-box{
            height: 20px;
            width: 20px;
            background-color: red;
            position: relative;
            top: 20px;
            left:25px;
            z-index: 1000;
            border-radius: 50%;
            border: 2px solid white;
            color: white;
            padding: 10px;
        }
        /* #head2{
            position: relative;
            top:50%;
            left: 0%;
            transform: translate(-50%, -50%);
        } */
        .main-btn{
            position: relative;
        }
        #bellball{
            background-color: red !important;
            /* height: 20px;
            width: 20px; */
            position: absolute;
            top: -2px;
            left: 40px;
            border-radius: 50%;
            text-align: center;
            /* border: 3px solid white; */
            /* padding: -1px; */
            width: 25px;
            height: 25px;
            
        }
        #bellball p{
         margin: auto;
         color: white;
         font-size: 13px;
         margin-top: 2px;
         font-weight: bold;
        }
        #bell{
            background-color: rgb(72, 72, 73);
            padding: 9px;
            border-radius: 50%;
        }

    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="main" style="display:flex; justify-content:space-between; align-items:center; padding:20px; ">
            <div class="div1" >
           <h1 style="color:white; display:inline; " id="head">User Data Table</h1>
    </div>
           <div class="div4" style=" width:300px; display:flex; justify-content: space-between;">
           <img class="img-fluid mt-1" src="Cartoon-Avatar-White-Background-300x300.png" alt="" style="height:50px; width:50px; border-radius:50%;" id="img">
            <button class="btn btn-primary mt-2" style="width:100px; height:40px"> <i class="fa fa-plus"></i> Add</button>
          <!-- <div class="divbell">
            <div class="bell-box">
            <h1 style="font-size:12px; font-weight:bold" id="head2">+9</h1>
            </div>
          </div> -->
          <div class="main-btn">
            <i class="fa fa-bell" style="font-size: 40px; color:white;" id="bell"></i>
            <div id="bellball"><p>+3</p></div>
          </div>
            <!-- <i class="fa fa-search" style="font-size: 25px; float:right !important; color:black; position:relative; top: 7px; left:-92%; "></i> -->
            <!-- <input  type="text" placeholder="" style="padding:5px; width:350px; border-radius:20px; border:none"> -->
           </div>
        </div>
        <table class="table table-striped table-bordered ">
           <div class="row">
           <tr style="text-align:center;">
                <th>User ID</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Phone-Number</th>
                <th>User Location</th>
                <th>User Site</th>
            </tr>
        <?php
        $selection = " select * from user_data_final_table";
        $data = mysqli_query($connection, $selection);

        while($data2 = mysqli_fetch_array($data)){
             ?>

            <tr style="text-align:center">
                <td><?php echo $data2['user_id']?></td>
                <td><?php echo $data2['user_name']?></td>
                <td><?php echo $data2['user_email']?></td>
                <td><?php echo $data2['user_number']?></td>
                <td><?php echo $data2['user_location']?></td>
                <td><?php echo $data2['user_site']?></td>
                <td><a href="delete.php? id=<?php echo $data2['user_id']?>" class="btn btn-danger"  onclick="myfunc()">DELETE</a></td>
                <td><a href="update.php? id=<?php echo $data2['user_id']?>" class="btn btn-success" >UPDATE</a></td>

                
            </tr>
<?php

        }


        ?>
           </div>

       
</table>
    </div>
</body>
</html>

<script src="main.js"></script>