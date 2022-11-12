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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <title>Hello, world!</title>
    <style>
        .col-lg-4 {
            margin: 23px 0px
        }
        .card {
            margin: auto;
            height: 375px;
            border-radius: 6px;
            background: #e0e0e0;
            box-shadow: 13px 13px 24px #bcbcbc,
                -13px -13px 24px #ffffff;
        }

        .btn1 {
            margin-right: 10px;
        }

        .logo {
            width: 186px;
            height: 174px;
            margin-bottom: -65px;
            margin-top: -64px;
        }

        .navbardiv a {
            color: black !important;
        }

        .user {
            color: black !important;
        }

        .main1 {
            display: flex;
            justify-content: center;
            background-color: #87bfff;
            margin: 10px 0px;
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
            font-weight: 700;
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
            color: blue;
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
                        <h5 class="card-title">'.$title.'</h5>
                        <p class="card-text">'.$description.'</p>
                        <a href="question.php?cat_id='.$id.'" class="btn btn-primary">Questions</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

</body>

</html>