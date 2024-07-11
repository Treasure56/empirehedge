<?php
    // require_once('connection.php');
    require_once('session.php');
    if(isset($_POST['submit'])){
        $wallet = isset($_POST['wallet_id']) ? $_POST['wallet_id'] : '';
        $amount = isset($_POST['amount']) ? $_POST['amount'] : '';
       
       

        if($wallet == "" && $amount == ""){
            $error = 'something went wrong';
            header('Location: ../deposit.php?&error='.$error);
            return false;
        }

        $wallet = sanitize($connect, $wallet);
        $btc = sanitize($connect, $btc);
        $uid = $user['id'];

        $sql = "SELECT * FROM wallets WHERE id = '$wallet'";
        $result = mysqli_query($connect, $sql);
        if(mysqli_num_rows($result) == 0){
            $error = 'Wallet not found';
            header('Location: ../deposit.php?error='.$error);
            return false;
        }
        if($result){
            $rows = mysqli_fetch_assoc($result);
            $enc = "'$wallet'"
            $encoded = json_encode($result);
            header('Location: ../deposit.php?success=Wallets updated'.'#section3');
            return false;
        }else{
            $error = 'something went wrong';
            header('Location: ../deposit.php?error='.$error);
            return false;
        }
     
    }else{
        header('Location: ../');
        return false;
    }

?>