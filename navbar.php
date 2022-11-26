<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
  <style>
      
    .logo {
      width: 209px !important;
      height: 113px !important;
      margin-bottom: -60px !important;
      margin-top: -55px !important;
    }
    .user {
      color: black;
      text-decoration: none;
      font-size: 18px;
    }
    .ulogo {
      width: 50px;
      height: 50px;
    }
    .btn-primary:hover {
      background-color: #3e6a9c !important;
      transform: scale(1.1);
      transition: 0.5s;
      text-decoration: underline;
    }
    .nav1 {
      background-color: #D6E4F0 !important;
    }

    .nav1 a {
      color: #163172 !important;
    }

    .navbar a:hover {
      text-decoration: underline;
    }
    .canvas{
      background-color: #D6E4F0 !important;
    }
    .logocan{
      width: 209px !important;
      height: 113px !important;
      margin-bottom: -60px !important;
      margin-top: -55px !important;
      margin-left:-40px;
    }
    @media(max-width:980px) {
      .logo{
        display: none;
      }
    }
    </style>
</head>

<body>
  <?php
  echo'
<nav class="navbar nav1">
  <div class="container-fluid">
  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
    <span class="navbar-toggler-icon"></span>
    </button>';
  if(!isset($_SESSION['loggedin'])){
    echo'
    <div class="accountbtn">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">login</button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupModal">signup</button>
    </div>';
  }
  else{
    $user_id=$_SESSION['user_id'];
    echo'
    <a class="navbar-brand" href="profile.php?user_id='.$user_id.'" class="user"><img src="user_logo.png" alt="" class="ulogo"><strong> '.$_SESSION['username'].'</strong></a>';
  }
  echo'
    <div class="offcanvas offcanvas-end canvas" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><a class="navbar-brand" href="#"><img src="newlogo.png" alt="" class="logocan"></a></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
              <a class="nav-link active mr" aria-current="page" href="index.php"><b>Home</b></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="about.php"><b>About</b></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="contact.php"><b>Contact</b></a>
          </li>';
          if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
            $user_id=$_SESSION['user_id'];
           echo' 
           <ul class="navbar-nav navdiv">
             <li class="nav-item">
             <a href="profile.php?user_id='.$user_id.'" class="user"><img src="user_logo.png" alt="" class="ulogo"><strong> '.$_SESSION['username'].'</strong></a>
             </li>
           </ul>';
        }
        
        echo'
      </ul>
      </div>
    </div>
   </div>
</nav>';


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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>