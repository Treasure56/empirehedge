<?php
require_once('connection.php');
if (isset($_POST['register'])) {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $code = isset($_POST['code']) ? $_POST['code'] : '';


    if ($email == "" || $password == "" || $code == "" ) {
        $error = 'All fields are required';
        header('Location: ../adminregister.php?error=' . $error);
        return false;

    }

    if($code != "123456"){
        $error = 'Invalid Code';
        header('Location: ../adminregister.php?error=' . $error);
        return false;
    }


    $email = sanitize($connect, $email);
    $password = sanitize($connect, $password);
    $code = sanitize($connect, $code);
    // $today = date('Y-m-d');

    $sql = "SELECT * FROM admin WHERE email = '$email'";
    $res = mysqli_query($connect, $sql);
    if (mysqli_num_rows($res) > 0) {
        $error = 'Email address already taken';
        header('Location: ../adminregister.php?error=' . $error);
        return false;
    }

    $password = md5($password);
    $sql = "INSERT INTO admin(email, password, code) VALUES( '$email', '$password', '$code')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        $success = 'registration successful';
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $res = mysqli_query($connect, $sql);
        if(mysqli_num_rows($res) > 0){
            $rows = mysqli_fetch_assoc($res);
            $id = $rows['id'];
            $email = $rows['email'];

            $_SESSION['id'] = $id;
            $_SESSION['email'] = $email;

            header('Location: ../admin/index.php');
            return false;
        }
        header('Location: ../admin/index.php?success=' . $success);
        return false;
    }
} else {
    $error = 'unauthorized access';
    header('Location: ../admin/index.php=' . $error);
    return false;
}
