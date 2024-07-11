<?php
    // require_once('connection.php');
    require_once('session.php');
    if(isset($_POST['submit'])){
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $newPassword = isset($_POST['newPassword']) ? $_POST['newPassword'] : '';
        $newPasswordAgain = isset($_POST['newPasswordAgain']) ? $_POST['newPasswordAgain'] : '';
       
       

        if($password == "" || $newPassword == ""){
            $error = 'All fields are required';
            header('Location: ../manage_account.php?s=2&error='.$error.'#section2');
            return false;
        }
        if(strlen($password) < 6){
            $error = 'password should be 6 or more characters';
            header('Location: ../manage_account.php?s=2&error='.$error.'#section2');
            return false;
        }
        if($newPassword != $newPasswordAgain){
            $error = 'passwords do not match';
            header('Location: ../manage_account.php?s=2&error='.$error.'#section2');
            return false;
        }

        $password = sanitize($connect, $password);
        $newPassword = sanitize($connect, $newPassword);
        $uid = $user['id'];

        $password = md5($password);
        $query = mysqli_query($connect, "SELECT * FROM users WHERE id = '$uid' AND password = '$password'");
        if(mysqli_num_rows($query) == 0){
            $error = 'incorrect password';
            header('Location: ../manage_account.php?s=2&error='.$error.'#section2');
            return false;
        }
       

       $password = md5($newPassword);
        $sql = "UPDATE `users` SET `password` = '$password' WHERE `id` = '$uid'";
                
        $result = mysqli_query($connect, $sql);
        if($result){
            header('Location: ../manage_account.php?s=2&success=password updated'.'#section2');
            return false;
        }else{
            $error = 'error updating password';
            header('Location: ../manage_account.php?s=2&error='.$error.'#section2');
            return false;
        }
    }else{
        header('Location: ../');
        return false;
    }

?>