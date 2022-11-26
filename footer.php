<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>
    </head>
    <style>
      .icon1{
        font-size: 30px;
        color: #1E56A0;
      }
      .nav a{
        color: #1E56A0 !important;
      }
      .nav a:hover{
        text-decoration: underline;
      }
      .footer_name{
        color:#163172 !important;
      }
      .btn-primary:hover{
        background-color:#3e6a9c !important;
            transform: scale(1.1);
            transition: 0.5s;
            text-decoration: underline;
        }
    </style>
<body>
<?php
    echo'
    <div class="container">
    <hr>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-muted footer_name"><b>© 2022 Conding Solutions</b></p>
  
      <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      </a>
  
      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted"><b>Home</b></a></li>
        <li class="nav-item"><a href="about.php" class="nav-link px-2 text-muted"><b>About</b></a></li>
        <li class="nav-item"><a href="contact.php" class="nav-link px-2 text-muted"><b>Contact</b></a></li>
        <li class="nav-item"><a href="https://www.instagram.com/yash_mulik_95/" target="_blank" class="nav-link px-2 text-muted"><i class="icon1 fa-brands fa-instagram"></i></a></li>
        <li class="nav-item"><a href="https://www.linkedin.com/in/yash-mulik-6727b2246/" target="_blank" class="nav-link px-2 text-muted"><i class="icon1 fa-brands fa-linkedin"></i></i></a></li>
        <li class="nav-item"><a href="#" target="_blank" class="nav-link px-2 text-muted"><i class="icon1 fa-brands fa-twitter"></i></i></i></a></li>
      </ul>
    </footer>
  </div>
    ';
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>