<!-- Modal -->
<?php
   /*include 'dbconnect.php';
    if($_SERVER['REQUEST_METHOD']=="POST"){
        include 'dbconnect.php';
        $fanme=$_POST['fname'];
        $lname=$_POST['lname'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql="select * from `login_system` where username='$username'";
        $result=mysqli_query($connect,$sql);
        $num=mysqli_num_rows($result);
        if($num==0){
            $hash= password_hash($password ,PASSWORD_DEFAULT);
            $sql="INSERT INTO `login_system` (`fname`, `lname`, `username`, `password`, `email`) VALUES ('$fanme', '$lname', '$username', '$hash', '$email')";
            $result=mysqli_query($connect,$sql);
            if($result){
                header("location: home.php?signupsucess=true");
                exit();
            }
        }
        else{
            echo"email already exist";
        }
    }*/
?>
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="signup_handle.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">first name</label>
                        <input type="text" class="form-control" id="fname" aria-describedby="emailHelp" name="fname">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">last name</label>
                        <input type="text" class="form-control" id="lname" aria-describedby="emailHelp" name="lname">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
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