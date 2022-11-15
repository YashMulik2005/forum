<!-- Modal -->
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
    <style>
        .box{
            display: flex;
        }
        .fname{
            width: 50%;
        }
        .lname{
            width: 50%;
        }
        .formbtn{
            width: 100%;
            margin: 10px 0px;
            background-color: #163172 !important;
        }
        #text1{
            font-weight: 600;
        }
        #text2{
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">SIGN-UP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="signup_handle.php" method="post">
                        <p><u><strong>Create account to connect with tech people</strong></u></p>
                        <i class="icon fa-solid fa-users"></i>
                        <div class="box">
                            <div class="mb-3 fname">
                                <input type="text" class="form-control" id="fname" aria-describedby="emailHelp"
                                    name="fname" placeholder="First name">
                            </div>
                            <div class="mb-3 lname">
                                <input type="text" class="form-control" id="lname" aria-describedby="emailHelp"
                                    name="lname" placeholder="Last name">
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="username" aria-describedby="emailHelp"
                                name="username" placeholder="Username">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                                placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary formbtn">Submit</button>
                        <!-- <p id="text2">or</p> -->
                        <i class="icon fa-brands fa-google"></i>
                        <i class="icon fa-brands fa-facebook"></i>
                        <i class="icon fa-brands fa-github"></i>
                        <i class="icon fa-brands fa-linkedin"></i>
                        <p id="text1"><u>If you already have account then,login.</u></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>