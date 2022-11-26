<?php
    include 'dbconnect.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Asul' rel='stylesheet' />
    <title>Coding Solution</title>
    <style>
        body{
            background-color: #D6E4F0 !important;
            font-family:Asul !important;
        }
        .col-lg-4 {
            margin: 23px 0px
        }
        .card {
            margin: auto;
            height: 375px;
            display: flex;
            flex-direction: column;
            border-radius: 6px !important;
            background: #F6F6F6 !important;
            background-image: url('cardgif.gif') !important;
            background-size: 100% 90% !important;
            background-repeat: no-repeat !important;
            background-blend-mode: lighten;
            box-shadow: 7px 7px 10px #a8a8a8, -7px -7px 10px #c0bfbf !important;
                /*7px 7px 10px #a8a8a8, -7px -7px 10px #e0e0e0*/
        }
        .card:hover{
            transform: scale(1.1);
            transition: 0.4s;
        }
        .card:hover .card_icon{
            display: none;
            transition: 0.4s;
        }
        .card:hover .card-title{
           text-align: center;
        }
        .btn1 {
            margin-right: 10px;
        }
        .carousel {
            margin-bottom: 10px;
        }

        .logo {
            width: 209px;
            height: 113px;
            margin-bottom: -60px;
            margin-top: -55px;
        }

        .user {
            color: black !important;
        }

        .main1 {
            display: flex;
            justify-content: center;
            background-color: #87bfff;
            margin: 15px 0px;
            /*margin-top: 10px !important;*/
        }

        .text {
            width: 50%;
            display: flex;
            padding: 23px;
            flex-direction: column;
            text-align: center;
            justify-content: center;
        }

        .text p {
            text-align: justify;
            font-size: 18px;
            font-weight: 400;
        }

        .image {
            width: 50%;
        }

        .image img {
            width: 100%;
            height: 100%;
        }
        .heading{
            margin:27px 10px;
        }
        .card_icon{
            font-size: 26px;
            color: #1E56A0;
        }
        .btn-primary:hover{
            background-color:#3e6a9c !important;
            transform: scale(1.1);
            transition: 0.5s;
            text-decoration: underline;
        }
        @media(max-width:900px) {
            .main1 {
                flex-direction: column;
            }

            .text {
                width: 100%;
            }

            .image {
                width: 100%;
            }

            .center {
                display: flex;
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    <?php
        include 'navbar.php'
    ?>
    <div class="main1">
        <div class="text">
            <h1>Coding Forum</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam explicabo harum sint alias facilis,
                necessitatibus eveniet sed. Laborum ut deleniti magni praesentium, excepturi reprehenderit saepe nihil
                optio itaque illo, sequi doloribus. Necessitatibus sunt id eum quasi voluptatibus? At delectus sequi ex
                inventore odit animi consequuntur ullam tempora architecto iste! Voluptate iusto natus sed ut illo.</p>
        </div>
        <div class="image">
            <img src="forum.png" alt="">
        </div>
    </div>
    <div class="container">
        <div class="heading">
            <h2 class="text-center"> CATEGIDIRES</h2>
        </div>
        <div class="row">
            <?php
            $sql="SELECT * FROM `categeries`";
            $result=mysqli_query($connect ,$sql);
            while($row=mysqli_fetch_assoc($result)){
                $title=$row['tittle'];
                $id=$row['categeries_id'];
                $description=$row['description'];
                echo '
                <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                   <!-- <img src="first.jpg" class="card-img-top" alt="...">-->
                    <div class="card-body">
                    <i class="fa-solid fa-code card_icon"></i>
                    <hr>
                        <h4 class="card-title"><b>'.$title.'</b></h4>
                        <p class="card-text">'.$description.'</p>
                        <a href="question.php?cat_id='.$id.'" class="card_btn btn btn-primary">Questions</a>
                    </div>
                </div>
            </div>';
            }
        ?>
        </div>
    </div>
    <!-- <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="first.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            thecard's content.</p>
                        <a href="#" class="btn btn-primary">Questions</a>
                    </div>
                </div>
            </div>-->
<?php          
 include 'footer.php';
 ?>
 

</body>

</html>