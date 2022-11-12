<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <style>
    .jumbotron {
        margin: 80px;
        margin-top: 40px;
    }

    .main {
        margin: 80px;
        margin-top: 40px;
        margin-bottom: -165px;
    }
    .qimg {
        width: 60px;
        height: 60px;
    }

    .qdiv {
        margin: 10px 80px;
    }
    </style>
    <title>Hello, world!</title>
</head>

<body>
    <?php include 'navbar.php';?>
    <?php include 'dbconnect.php';?>

    <?php
        $que_id=$_GET['qus_id'];
        $sql="SELECT * FROM `questions` WHERE `qes_id` = $que_id";
        $result=mysqli_query($connect, $sql);
        $row=mysqli_fetch_assoc($result);
        $title=$row['qtittle'];
        $desc=$row['qdescription'];
    ?>
    <div class="jumbotron">
        <h1 class="display-4"><?php echo $title ?></h1>
        <p class="lead"><?php echo $desc ?></p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>

    <?php
        if($_SERVER['REQUEST_METHOD'] =='POST')
        {
           $que_id=$_GET['qus_id'];
           $user_id=$_SESSION['user_id'];
           $des=$_POST['adescription'];
           $sql="INSERT INTO `answers` (`user_id`, `ques_id`, `text`, `time`) VALUES ('$user_id', '$que_id', '$des', current_timestamp())";
           $result=mysqli_query($connect,$sql);
        }
    ?>

    <div class="main">
        <form action="answres.php" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"><b>Example textarea</B></label>
                <textarea class="form-control" id="qdescription" rows="3" name="adescription"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <?php
        $sql="SELECT * FROM `answers` WHERE `ques_id` = $que_id";
        $result=mysqli_query($connect,$sql);
        $num=mysqli_num_rows($result);
        //echo $_SESSION['user_id'];
        if($num>0){
        //echo' <h2>Questions on '.$cat_title .'</h2>';
        while($row=mysqli_fetch_assoc($result)){
            $description=$row['text'];
            $time=$row['time'];
            $user_id=$row['user_id'];
            $sql2="SELECT * FROM `login_system` WHERE `user_id` = $user_id";
            $result1=mysqli_query($connect,$sql2);

            $row2=mysqli_fetch_assoc($result1);
            $name=$row2['username'];
           // $sql="select * from login_system where ";
            echo '<div class="d-flex qdiv">
            <div class="flex-shrink-0">
              <img src="user_logo.png" class="qimg" alt="...">
              <p>'.$name.'</p>
            </div>
            <div class="flex-grow-1 ms-3">
              <p>'. $time .'</p>
              <hr>
              <p>'. $description .'</p>
            </div>
          </div>';
        }
    }
    else{
        echo '<p class="form_p">Post a question and start a conversation</p>';
    }
    ?>
    
    <?php
        include 'footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>