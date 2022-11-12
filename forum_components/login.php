<?php
   // include 'dbconnect.php';
    if($_SERVER['REQUEST_METHOD']=="POST"){
        include 'dbconnect.php';
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql="SELECT * FROM `login_system` WHERE `username`='$username'";
        $result=mysqli_query($connect,$sql);
        $row=mysqli_num_rows($result);
        if($row==1){
            $row=mysqli_fetch_assoc($result);
            if(password_verify($password,$row['password'])){
                session_start();
                $_SESSION['loggedin']=true;
                $_SESSION['user_id']= $row['user_id'];
                $_SESSION['username']=$username;
            }
                header("location: home.php");
        }
        header("location: home.php");
    }
?>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="login.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">username</label>
                        <input type="text" class="form-control" id="username" aria-describedby="emailHelp"
                            name="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>