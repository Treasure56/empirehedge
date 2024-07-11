<?php
require_once('connection.php');
if (isset($_POST['register'])) {
    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if ($fullname == "" || $username == "" || $email == "" || $password == "") {
        $error = 'All fields are required';
        header('Location: ../register.php?error=' . $error);
        return false;
    }

    $fullname = sanitize($connect, $fullname);
    $username = sanitize($connect, $username);
    $email = sanitize($connect, $email);
    $password = sanitize($connect, $password);
    // $today = date('Y-m-d');

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($connect, $sql);
    if (mysqli_num_rows($res) > 0) {
        $error = 'Email address already taken';
        header('Location: ../register.php?error=' . $error);
        return false;
    }

    $password = md5($password);
    $sql = "INSERT INTO users(full_name, user_name, email, password) VALUES('$fullname', '$username', '$email', '$password')";
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

            header('Location: ../dashboard.php');
            return false;
        }
        header('Location: ../dashboard.php?success=' . $success);
        return false;
    }
} else {
    $error = 'unauthorized access';
    header('Location: ../register.php?error=' . $error);
    return false;
}
