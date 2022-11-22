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
   .form_p{
        text-align: center;
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
    .ques{
        display: flex;
        padding: 10px;
       /* margin: 10px 80px;*/
        border: 1px solid rgb(93, 91, 91);
        border-radius: 7px;
        background-color: rgba(215, 216, 218, 0.778);
        box-shadow: 2px;
    }
    .qimgdiv{
        width: 10%;
    }
  
    .user{
        width: 15%;
    }
    .qdivicon{
        position: relative;
    }
    textarea{
        background-color: #F6F6F6 !important;
    }
    textarea:focus{
        background-color: #F6F6F6 !important;
    }
    .abtn{
        width: 100%;
        display: flex;
        justify-content: right;
    }
    .ansbtn{
        color: white !important;
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
   // session_start();
   // echo $_SESSION['user_id'];
   $cat_id=$_GET['cat_id'];
   $sql="select * from `categeries` where `categeries_id`=$cat_id";
   $result=mysqli_query($connect,$sql);
   $row=mysqli_fetch_assoc($result);
   $cat_title=$row['tittle'];
   $cat_des=$row['description'];
   echo' <div class="jumbotron">
        <h1 class="display-4"><b>'. $cat_title. '</b></h1>
        <p class="lead"><strong>'. $cat_des . '</strong></p>
        <hr class="my-4">
    </div>';
    ?>
    <?php
    //include 'dbconnect.php';
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $qtittle=$_POST['qtittle'];
        $cat_id=$_GET['cat_id'];
        $qdescription=$_POST['qdescription'];
        $user_id=$_SESSION['user_id'];
        $sql="INSERT INTO `questions` (`qtittle`, `qdescription`, `cat_id`,`user_id`) VALUES ('$qtittle', '$qdescription','$cat_id','$user_id')";
        $result=mysqli_query($connect,$sql);
        if(!$result){
            echo 'Something went wrong please try again';
        }
    }
?>
    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
       echo' <div class="main">
            <form action=" '. $_SERVER["REQUEST_URI"] .' " method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1"><b>Question tittle</b></label>
                    <input type="text" class="form-control" id="qtittle" aria-describedby="emailHelp" name="qtittle">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><b>Question discription</B></label>
                    <textarea class="form-control" id="qdescription" rows="3" name="qdescription"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>';
    }
    else{
        echo'<p class="form_p"><strong>For posting a question you have to login first.</strong></p><hr>';
    }
    ?>

    <?php
        $sql="SELECT * FROM `questions` WHERE `cat_id` = $cat_id";
        $result=mysqli_query($connect,$sql);
        $num=mysqli_num_rows($result);
        //echo $_SESSION['user_id'];
        if($num>0){
        echo' 
            <h2>Questions on '.$cat_title .'</h2>';
        while($row=mysqli_fetch_assoc($result)){
            $que_id=$row['qes_id'];
            $tittle=$row['qtittle'];
            $description=$row['qdescription'];
            $time=$row['time'];
            $user_id=$row['user_id'];

            $sql1="SELECT * FROM `login_system` WHERE `user_id` = $user_id";
            $result1=mysqli_query($connect,$sql1);
            $row1=mysqli_fetch_assoc($result1);
            $name=$row1['username'];
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
            if($name==$_SESSION['username']){
            echo '<div class="qdiv">
            <div class="img">
              <a href="profile.php?user_id='.$user_id.'"><img src="user_logo.png" class="qimg" alt="..."></a>
              <p><b>YOU</b></p>
            </div>
            <div class="text">
                <p><b>POSTED AT </b>'.$time.'</p>
                <hr>
              <a href="answres.php?qus_id='. $que_id .' "><h3>'. $tittle .'</h3></a>
              <pre>'. $description .'</pre>
              <hr>
              <div class="abtn">
              <a href="answres.php?qus_id='. $que_id .' " class="ansbtn btn btn-primary">Get Answer</a>
              </div>
            </div>

          </div>';
            }
            else{
                echo '<div class="qdiv">
                <div class="img">
                  <a href="profile.php?user_id='.$user_id.'"><img src="user_logo.png" class="qimg" alt="..."></a>
                  <p><b>'.$name.'</b></p>
                </div>
                <div class="text">
                    <p><b>POSTED AT </b>'.$time.'</p>
                    <hr>
                  <a href="answres.php?qus_id='. $que_id .' "><h3>'. $tittle .'</h3></a>
                  <pre>'. $description .'</pre>
                  <hr>
                  <div class="abtn">
                  <a href="answres.php?qus_id='. $que_id .' " class="ansbtn btn btn-primary">Get Answer</a>
                  </div>
                </div>
    
              </div>';
            }
        }
        else{
                echo '<div class="qdiv">
            <div class="img">
              <a href="profile.php?user_id='.$user_id.'"><img src="user_logo.png" class="qimg" alt="..."></a>
              <p><b>'.$name.'</b></p>
            </div>
            <div class="text">
                <p><b>POSTED AT </b>'.$time.'</p>
                <hr>
              <a href="answres.php?qus_id='. $que_id .' "><h3>'. $tittle .'</h3></a>
              <pre>'. $description .'</pre>
              <hr>
              <div class="abtn">
              <a href="answres.php?qus_id='. $que_id .' " class="ansbtn btn btn-primary">Get Answer</a>
              </div>
            </div>
          </div>';
            }
         
        }
    }
    else{
        echo '<p class="form_p"><strong>Post a question and start a conversation</strong></p>';
    }
    ?>
   <!-- <div class="ques">
        <div class="qimgdiv">
            <img src="user_logo.png" class="qimg" alt="">
        </div>
        <div class="text">
            <p>tittle</p>
            <p>descriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescription</p>
        </div>
        <div class="user">
            <p>66758r86476</p>
            <p>64657t8t98y9887r7997986764</p>
        </div>
    </div>-->

    <?php
        include 'footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>