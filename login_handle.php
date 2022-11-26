<?php
    include 'dbconnect.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['username'];
        $pass=$_POST['password'];

        $sql="SELECT * FROM `login_system` WHERE `username`='$name'";
        $result=mysqli_query($connect,$sql);
        $num=mysqli_num_rows($result);
        if($num==1){
            $row= mysqli_fetch_assoc($result);
            $id=$row['user_id'];
            if(password_verify($pass,$row['password'])){
                session_start();
                $_SESSION['loggedin']=true;
                $_SESSION['user_id']=$id;
                $_SESSION['username']=$name;
            }
            header("location: index.php?logedin=true");
        }
        header("location: index.php");
    }
?>