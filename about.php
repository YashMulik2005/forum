<?php
    include 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Asul' rel='stylesheet' />
    <title>CODING SOLUTION ABOUT</title>
    <style>
    body{
        background-color: #D6E4F0 !important;
        font-family:Asul !important;
        font-size: 18px;
    }
         .container1 {
        margin: 35px;
        display: flex;
        height: 350px;
        justify-content: center;
        align-items: center;
    }

    .container2 {
        margin: 35px;
        display: flex;
        height: 350px;
        justify-content: center;
        align-items: center;
    }

    .child1 {
        display: flex;
        flex-direction: column;
        width: 35%;
        justify-content: center;
        align-items: center;
        margin-right: 25px;
        text-align: justify;
    }

    .child10f2 {
        display: flex;
        flex-direction: column;
        width: 35%;
        justify-content: center;
        align-items: center;
        margin-left: 33px;
        text-align: justify;
    }
    .img1 {
        width: 350px;
        height: 350px;
        border: 0px solid black;
        border-radius: 10px;
    }

    .img2 {
        width: 350px;
        height: 350px;
        border: 1px solid black;
        border-radius: 10px;
    }
    @media(max-width:900px) {
        .container1 {
            flex-direction: column-reverse;
            height: 750px;
        }

        .container2 {
            flex-direction: column;
            height: 750px;
           
        }

        .child1 {
            width: 100%;
            text-align: justify;
            margin-right: 0px;
        }

        .child10f2 {
            width: 100%;
            text-align: justify;
            margin-left: 0px;
        }

        .img1,
        .img2 {
            margin-bottom: 15px;
            width: 320px;
            height: 320px;
        }
    }
    @media (min-width:500px) and (max-width:900px)
     {
        .container1 {
            flex-direction: column-reverse;
            height: 600px;
        }

        .container2 {
            flex-direction: column;
            height: 600px;
        }

        .child1 {
            width: 70%;
            text-align: justify;
            margin-right: 0px;
        }

        .child10f2 {
            width: 70%;
            text-align: justify;
            margin-left: 0px;
        }

        .img1,
        .img2 {
            margin-bottom: 15px;
        }
     }
    </style>
</head>
<body>
    <?php
        include 'navbar.php'
    ?>
        <div class="container1">
        <div class="child1">
            <h3>HOW WE START</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum inventore eius, adipisci placeat deleniti
                odio ipsum.
                Deleniti non quasi officiis, molestiae laborum repellendus corrupti omnis. Cumque quos at harum officiis
                repudiandae
                sequi, magnam modi placeat, corrupti blanditiis dicta pariatur doloribus eum ad! Quae repellat labore
                facere ab incidunt
                veritatis impedit minima dignissimos quisquam iste. Accusantium?</p>
        </div>
        <div class="child2">
            <img src="img1.jpg" alt="photo" class="img1">
        </div>
    </div>
    <div class="container2">
        <div class="child2">
            <img src="img2.jpg" alt="photo" class="img1">
        </div>
        <div class="child10f2">
            <h3>HOW WE GET IDEA</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum inventore eius, adipisci placeat deleniti
                odio ipsum.
                Deleniti non quasi officiis, molestiae laborum repellendus corrupti omnis. Cumque quos at harum officiis
                repudiandae
                sequi, magnam modi placeat, corrupti blanditiis dicta pariatur doloribus eum ad! Quae repellat labore
                facere ab incidunt
                veritatis impedit minima dignissimos quisquam iste. Accusantium?</p>
        </div>
    </div>
    <div class="container1">
        <div class="child1">
            <h3>WHY CODING FORUM</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum inventore eius, adipisci placeat deleniti
                odio ipsum.
                Deleniti non quasi officiis, molestiae laborum repellendus corrupti omnis. Cumque quos at harum officiis
                repudiandae
                sequi, magnam modi placeat, corrupti blanditiis dicta pariatur doloribus eum ad! Quae repellat labore
                facere ab incidunt
                veritatis impedit minima dignissimos quisquam iste. Accusantium?</p>
        </div>
        <div class="child2">
            <img src="img3.jpg" alt="photo" class="img2">
        </div>
    </div>
    <?php          
        include 'footer.php';
    ?>
</body>
</html>