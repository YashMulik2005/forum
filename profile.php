<?php
    include 'dbconnect.php';
    include 'navbar.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <style>
    .box {
        margin: 55px;
        border-radius: 0px;
        background: #e0e0e0;
        box-shadow: 18px 18px 36px #bebebe,
            -18px -18px 36px #ffffff;
        padding: 15px;
    }

    .photo {
        display: flex;
        padding: 15px;
    }

    .userimg {
        width: 40%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .userimg img {
        width: 235px;
        height: 235px;
    }

    .text {
        width: 60%;
        display: flex;
        align-items: flex-start;
        flex-direction: column;
        justify-content: center;
    }

    .text2 {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    </style>
    <title>Hello, world!</title>
</head>

<body>
    <?php
    //session_start();
    $id=$_GET['user_id'];
   // $id=$_SESSION['user_id'];
   // echo $id;
    $sql="SELECT * FROM `login_system` WHERE `user_id` = $id";
    $result=mysqli_query($connect,$sql);
    $num=mysqli_num_rows($result);
    if($num==1){
    $row=mysqli_fetch_assoc($result);
    $fname=$row['fname'];
    $lname=$row['lname'];
    $username=$row['username'];
    $email=$row['email'];
    $time=$row['time'];
   echo' <div class="box">
    <div class="photo">
      <div class="userimg">
        <img src="user_logo.png" alt="">
      </div>
      <div class="text">
        <h1>'.$fname.' '.$lname.'</h1>
        <h4>Username:'.$username.'</h4>
      </div>
    </div>
    <hr>
    <div class="text2">
    <h5>Email: '.$email.'</h5>
    <h5>Number of questions post:10</h5>
    <h5>Number of answer post</h5>
    <h5>Account was crated on:'.$time.'</h5>
    <a href="logout.php" class="btn btn-primary">log out</a>
    </div>
  </div>';}
  ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <?php
  include 'footer.php';
?>
</body>

</html>