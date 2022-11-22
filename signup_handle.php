<?php
    include 'dbconnect.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $firstn=$_POST['fname'];
        $lastn=$_POST['lname'];
        $mail=$_POST['email'];
        $name=$_POST['username'];
        $pass=$_POST['password'];

        $sql="SELECT * FROM `login_system` WHERE `username` LIKE '$name'";
        $result=mysqli_query($connect,$sql);
        $num=mysqli_num_rows($result);
        if($num>0){
            echo "username exist";
            header("location:home.php?signupsucess=false");
        }
        else{
            $hash=password_hash($pass,PASSWORD_DEFAULT);
            if(strlen($pass)>=8){
                $sql="INSERT INTO `login_system` (`fname`, `lname`, `username`, `email`, `password`, `time`) VALUES ('$firstn', '$lastn', '$name', '$mail', '$hash', current_timestamp())";
                $result=mysqli_query($connect,$sql);
                if($result){
                    header("location:home.php?signupsucess=true");
                    exit();
                }
            }
            else{
                header("location:home.php?Passwordlength=true");
            }
        }
    }
?>