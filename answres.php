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
    <link href='https://fonts.googleapis.com/css?family=Asul' rel='stylesheet' />
    <style>
     body{
        background-color:#D6E4F0 !important;
        margin: 0px 70px !important;
        font-family:Asul !important;
    }
    .jumbotron {
     
        /* background: rgba(243, 245, 247, 0.3)!important; */
        padding: 30px;
        background-color:#F6F6F6;
        border-radius: 4px;
        margin: 40px 0px;
        box-shadow: 13px 13px 24px #bcbcbc,
                -13px -13px 24px #e3e3e3;
        font-size: 14px !important;
       
    }
    .btn-primary:hover{
        background-color:#3e6a9c !important;
            transform: scale(1.1);
            transition: 0.5s;
            text-decoration: underline;
        }
   .main{
        padding: 30px;
        background-color: #F6F6F6;
        margin: 40px 0px;
        box-shadow: 13px 13px 24px #bcbcbc,
                -13px -13px 24px #e3e3e3;
       
   }
   .qdiv {
       /* margin: 10px 80px;*/
        padding: 10px;
        display: flex;
        width: 100%;
        border-radius: 3px;
        margin: 28px 0px;
        background-color: #F6F6F6;
        box-shadow: 13px 13px 24px #bcbcbc,
                -13px -13px 24px #e3e3e3;
    }
    .img{
        width: 13%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
       /* border: 2px solid black;*/
        border-right:2px soild black;
    }
    .text{
        width: 87%;
        padding: 10px;
    }
    .qimg {
        width: 60px;
        height: 60px;
    }

    .qdiv a {
        font-weight: bolder;
        text-decoration: none;
        color: black;
    }

    .qdiv a:hover {
        color: black;
    }
    .qimg {
        width: 60px;
        height: 60px;
    }
    .form_p{
        text-align: center;
   }
    @media(max-width:900px) {
        body{
            margin: 0px 15px !important;
        }
        .qdiv{
            flex-direction: column;
        }
        .img{
            width: 100%;
        }
        .text{
            width: 100%;
        }
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
        <pre class="lead"><?php echo $desc ?></pre>
        <hr class="my-4">
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
     <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
       echo'
    <div class="main">
        <form action=" '. $_SERVER["REQUEST_URI"] .' " method="post">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"><b>ANSWER</B></label>
                <textarea class="form-control" id="qdescription" rows="3" name="adescription"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>';
}
else{
    echo'<p class="form_p"><strong>For posting a answer you have to login first.</strong></p><hr>';
}
?>

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
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
                if($name==$_SESSION['username']){
                        echo '<div class="qdiv">
                        <div class="img">
                        <img src="user_logo.png" class="qimg" alt="...">
                        <p><b>YOU</b></p>
                        </div>
                        <div class="text">
                        <p><b>POSTED AT </b>'. $time .'</p>
                        <hr>
                        <pre>'. $description .'</pre>
                        </div>
                     </div>';
                }
                else{
                    echo '<div class="qdiv">
                    <div class="img">
                    <img src="user_logo.png" class="qimg" alt="...">
                    <p><b>'.$name.'</b></p>
                    </div>
                    <div class="text">
                    <p><b>POSTED AT </b>'. $time .'</p>
                    <hr>
                    <pre>'. $description .'</pre>
                    </div>
                 </div>';
                }
            }
                else{
                    echo '<div class="qdiv">
                    <div class="img">
                    <img src="user_logo.png" class="qimg" alt="...">
                    <p><b>'.$name.'</b></p>
                    </div>
                    <div class="text">
                    <p><b>POSTED AT </b>'. $time .'</p>
                    <hr>
                    <pre>'. $description .'</pre>
                    </div>
                 </div>';
                }
        }
    }
    else{
        echo '<p class="form_p"><b>Post a answer and start a conversation</b></p>';
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