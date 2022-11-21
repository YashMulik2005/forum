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
    <link href='https://fonts.googleapis.com/css?family=Asul' rel='stylesheet' />
    <style>
        body{
            background-color: #D6E4F0 !important;
            font-family:Asul !important;
        }
    .box {
        margin: 55px;
        border-radius: 0px;
        background: #F6F6F6;
        box-shadow: 13px 13px 24px #bcbcbc,
                -13px -13px 24px #e3e3e3;
        padding: 15px;
        display: flex;
        flex-direction: column;

    }

    .photo {
        display: flex;
        padding: 15px;
    }

    .userimg {
        width: 55%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .userimg img {
        width: 180px;
        height: 180px;
    }

    .text {
        width: 45%;
        display: flex;
        align-items: flex-start;
        flex-direction: column;
        justify-content: center;
        margin-left: -180px;
    }

    .text2 {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .number{
        display: flex;
    }
    .numbox{
        background-color: #163172;
        display: flex;
        justify-content: center;
        text-align: center;
        padding: 17px;
        margin: 15px 8px;
        color: white;
        border-radius: 10px;
    }
    @media(max-width:900px) {
        .box{
            margin: 10px 15px;
        }
        .photo{
            flex-direction: column;
        }
        .userimg{
            width: 100%;
        }
        .text{
            width: 100%;
            margin-left: 0px;
            align-items: center;
        }
        .number{
            flex-direction: column;
        }
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
    $sql="SELECT COUNT(*) AS count FROM `questions` WHERE `user_id`= $id";
    $result=mysqli_query($connect,$sql);
    $row=mysqli_fetch_assoc($result);
    $one = $row['count'];
    $sql="SELECT COUNT(*) AS count FROM `answers` WHERE `user_id`= $id";
    $result=mysqli_query($connect,$sql);
    $row=mysqli_fetch_assoc($result);
    $two = $row['count'];
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
    <h5>Created on:'.$time.'</h5>
    <div class="number">
    <div class="numbox"><h5>Number of questions post<br><br>'.$one.'</h5></div>
    <div class="numbox"><h5>Number of answer post<br><br>'.$two.'</h5></div>
    </div>
    <h5>Account created on:'.$time.'</h5>
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