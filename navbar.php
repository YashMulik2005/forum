<?php
  session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <link href='https://fonts.googleapis.com/css?family=Asul' rel='stylesheet' />
    <style>
      body{
        font-family:Asul !important;
      }
    .user {
        color: black;
        text-decoration: none;
        font-size: 18px;
    }
    .btn-primary:hover{
      background-color:#3e6a9c !important;
            transform: scale(1.1);
            transition: 0.5s;
            text-decoration: underline;
        }

    .ulogo {
        width: 50px;
        height: 50px;
    }
    .navdiv{
      position: absolute;
      right:10px;
    }
    .btn{
      background-color: #1E56A0 !important;
    }
    .nav1{
      background-color: #D6E4F0 !important;
    }
    .nav1 a{
        color: #163172 !important;
    }
    .navbar a:hover{
        text-decoration: underline;
    }
    .alert{

      margin-bottom: 0px !important;
    }
    @media(max-width:1000px){
      .navdiv{
        position: static;

      }
    }
    </style>
    <title>Hello, world!</title>
</head>

<body>
  <?php
      echo '<nav class="navbar navbar-expand-lg navbar-light nav1">
  <div class="container-fluid">
  <a class="navbar-brand" href="#"><img src="logo.png" alt="" class="logo"></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php"><b>Home</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><b>About</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><b>Contact</b></a>
          </li>
        </ul>
        </div>';
        // session_start();
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
        $user_id=$_SESSION['user_id'];
       echo' <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navdiv">
         <li class="nav-item">
         <a href="profile.php?user_id='.$user_id.'" class="user"><img src="user_logo.png" alt="" class="ulogo"><strong> '.$_SESSION['username'].'</strong></a>
         </li>
       </ul>
      </div>';
      }
      else{
        echo'
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav me-auto mb-2 mb-lg-0 navdiv">
         <li class="nav-item">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">login</button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupModal">signup</button> 
         </li>
       </ul>
      </div>';
      }
    echo '<hr>
    </div>
    </nav>';
?>
    <?php
include 'login.php';
include 'signup.php';

if(isset($_GET['signupsucess']) && $_GET['signupsucess']=="true"){
  echo'
  <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>suceessful!!</strong> Account created suceessfully, now you can login.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
}
else if(isset($_GET['Passwordlength']) && $_GET['Passwordlength']=="true"){
echo'
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Unsuceessful!!</strong> Password must have atleast 8 characters.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
}
else if(isset($_GET['signupsucess']) && $_GET['signupsucess']=="false"){
  echo'
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Unsuceessful!!</strong> Username already exist.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="navbar.js"></script>

</body>

</html>