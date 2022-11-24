<?php
    include 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Asul' rel='stylesheet' />
    <title>Document</title>
    <style>
        body{
            background-color: #D6E4F0 !important;
            font-family:Asul !important;
        }
        .main{
            display: flex;
            margin: 80px 130px;
            /* border: 2px solid black; */
            background-color: #F6F6F6 !important;
            box-shadow: 7px 7px 10px #a8a8a8, -7px -7px 10px #c0bfbf !important;
            padding: 30px;
        }
        .img{
            width: 45%;
        }
        .img img{
            width: 100%;
            height: 100%;
        }
        .text{
            width: 55%;
            padding: 30px;
        }
        textarea{
            border: none;
            background-color:#F6F6F6 !important ;
        }
        .form_p{
            text-align: center;
        }
        .divm{
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 70vh !important;
        }
        @media (max-width:900px){
            .main{
                flex-direction: column;
            }
            .img{
                width: 100%;
            }
            .text{
                width: 100%;
            }
            .divm{
                min-height: 70vh!important;
            }
        }
        @media(max-width:680px){
            .main{
                margin: 20px 20px;
                padding: 20px;
            }
            .text{
                padding: 20px;
            }
            .divm{
                min-height: 70vh!important;
            }
        }
    </style>
</head>
<body>
    <?php
        include 'navbar.php'
    ?>
    <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $name=$_POST['username'];
            $sql="SELECT * FROM `login_system` WHERE `username`='$name'";
            $result=mysqli_query($connect,$sql);
            $num=mysqli_num_rows($result);
            if($num==1){
                echo'
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>suceessful!!</strong> Message send successfully!!!!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
            }
            else{
                echo'
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Unsuceessful!!</strong> Invalid user name.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
            }
        }
    ?>
    <div class="divm">
     <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
       echo'
       <div class="main">
           <div class="img">
               <img src="img1.jpg" alt="">
           </div>
           <div class="text">
               <form action="contact.php" method="post">
                   <div class="box">
                       <div class="mb-3 fname">
                           <input type="text" class="form-control" id="fname" aria-describedby="emailHelp"
                               name="fname" placeholder="First name" required>
                       </div>
                       <div class="mb-3 lname">
                           <input type="text" class="form-control" id="lname" aria-describedby="emailHelp"
                               name="lname" placeholder="Last name">
                       </div>
                   </div>
                   <div class="mb-3">
                       <input type="text" class="form-control" id="username" aria-describedby="emailHelp"
                           name="username" placeholder="Username" required>
                   </div>
                   <div class="mb-3">
                       <input type="email" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp" name="email" placeholder="Email" required>
                   </div>
                   <div class="mb-3">
                       <textarea class="form-control" id="qdescription" rows="3" name="adescription" placeholder="Meassage"></textarea>
                   </div>
                   <button type="submit" class="btn btn-primary formbtn" >Submit</button>
               </form>
           </div>
        </div>';
}
else{
    echo'<p class="form_p"><strong>For sending a message you have to login first.</strong></p><hr>';
}
?>
</div>
<?php          
        include 'footer.php';
?>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
<script>
   
</script>
</body>
</html>