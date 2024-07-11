<?php
    // require_once('connection.php');
    require_once('session.php');
    if(isset($_POST['submit'])){
        $ust = isset($_POST['ust']) ? $_POST['ust'] : '';
        $btc = isset($_POST['btc']) ? $_POST['btc'] : '';
        $eth = isset($_POST['eth']) ? $_POST['eth'] : '';
       
       

        if($ust == "" && $btc == "" && $eth == ""){
            $error = 'Enter at least one address';
            header('Location: ../manage_account.php?s=3&error='.$error.'#section3');
            return false;
        }

        $ust = sanitize($connect, $ust);
        $btc = sanitize($connect, $btc);
        $eth = sanitize($connect, $eth);
        $uid = $user['id'];

        $sql = "UPDATE `users` SET `acc_ust` = '$ust', `acc_btc` = '$btc', `acc_eth` = '$eth' WHERE `id` = '$uid'";
        $result = mysqli_query($connect, $sql);
        if($result){
            header('Location: ../manage_account.php?s=3&success=Wallets updated'.'#section3');
            return false;
        }else{
            $error = 'error updating wallets';
            header('Location: ../manage_account.php?s=3&error='.$error.'#section3');
            return false;
        }
     
    }else{
        header('Location: ../');
        return false;
    }

?>