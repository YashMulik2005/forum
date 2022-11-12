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
        input[type=text],input[type=password],input[type=email]{
            border: none;
            border-bottom: 1px solid black;
            border-radius: 0px;
            width: 92%;

        }
        .modal-body{
            display: flex;
            flex-direction: column;
            width: 100%;
            text-align: center;
            padding: 15px;
           /* border: 2px solid black;*/
        }
        #text{
            font-weight: 400;
        }
        #text1{
            font-weight: 600;
        }
        #text2{
            font-weight: 600;
        }
        .formbtn{
            width: 100%;
            margin: 10px 0px;
        }
        .icon{
            font-size: 30px;
            margin: 10px;
            margin-top: 0px;
            color: #2667ff;
        }
        .text{
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="loginbox">
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">LOGIN</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p id="text"><strong><u>Login and get answers of your coding question.</u></strong></p>
                        <i class=" icon fa-regular fa-face-smile"></i>
                        <form action="login_handle.php" method="post">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="username" aria-describedby="emailHelp"
                                    name="username" placeholder="USERNAME">
                            </div> 
                            <div class="mb-3">
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                                placeholder="PASSWORD">
                            </div>
                            <button type="submit" class="btn btn-primary formbtn">Submit</button>
                            <hr>
                            <p id="text2">or</p>
                            <i class="icon fa-brands fa-google"></i>
                            <i class="icon fa-brands fa-facebook"></i>
                            <i class="icon fa-brands fa-github"></i>
                            <i class="icon fa-brands fa-linkedin"></i>
                            <p id="text1"><u>If you not have account then, signup first.</u></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
<!-- Modal -->