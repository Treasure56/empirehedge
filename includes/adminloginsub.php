<?php
    session_start();
    require_once('connection.php');
    if(isset($_POST['login'])){
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

        if($email == "" || $password == ""){
            $error = 'All fields are required';
            header('Location: ../adminlogin.php?error='.$error);
            return false;
        }

        $email = sanitize($connect, $email);
        $password = sanitize($connect, $password);
        
        $password = md5($password);

        $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
        $res = mysqli_query($connect, $sql);
        if(mysqli_num_rows($res) > 0){
            $rows = mysqli_fetch_assoc($res);
            $id = $rows['id'];
            $email = $rows['email'];

            $_SESSION['id'] = $id;
            $_SESSION['email'] = $email;

            header('Location: ../admin/index.php');
            return false;
        }else{
            $error = 'invalid login details';
            header('Location: ../adminlogin.php?error='.$error);
            return false;
        }    
    }else{
        $error = 'unauthorized access';
        header('Location: ../adminregister.php?error='.$error);
        return false;
    }

?>