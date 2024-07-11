<?php
    // require_once('connection.php');
    require_once('session.php');
    if(isset($_POST['submit'])){
        $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $country = isset($_POST['country']) ? $_POST['country'] : '';
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
       

        if($fullname == "" || $username == "" || $email == "" || $country == "" || $phone == ""){
            $error = 'All fields are required';
            header('Location: ../manage_account.php?s=1&error='.$error.'#section1');
            return false;
        }

        $fullname = sanitize($connect, $fullname);
        $username = sanitize($connect, $username);
        $email = sanitize($connect, $email);
        $country = sanitize($connect, $country);
        $phone = sanitize($connect, $phone);
       $uid = $user['id'];

       
        $sql = "UPDATE `users` SET `full_name` = '$fullname', `user_name` = '$username', `email` = '$email', `country` = '$country', `phone` = '$phone' WHERE `id` = '$uid'";
                
        $result = mysqli_query($connect, $sql);
        if($result){
            header('Location: ../manage_account.php?s=1&success=profile updated'.'#section1');
            return false;
        }else{
            $error = 'error updating profile';
            header('Location: ../manage_account.php?s=1&error='.$error.'#section1');
            return false;
        }
    }else{
        header('Location: ../');
        return false;
    }

?>