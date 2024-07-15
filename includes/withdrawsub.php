<?php
    // require_once('connection.php');
    require_once('session.php');
    if(isset($_POST['submit'])){
        $amount = isset($_POST['amount']) ? $_POST['amount'] : '';
        $wallet = isset($_POST['wallet']) ? $_POST['wallet'] : '';
       

        if($amount == "" || $wallet == ""){
            $error = 'All fields are required';
            header('Location: ../withdraw.php?error='.$error.'#section1');
            return false;
        }

        $amount = sanitize($connect, $amount);
        $wallet = sanitize($connect, $wallet);
       $uid = $user['id'];

        $amount = (float) $amount;
        $balance = (float) $user['balance'];
        if($balance < $amount){
            $error = 'Insufficient balance';
            header('Location: ../withdraw.php?error='.$error.'#section1');
            return false;
        }

        // split a string by .
        $wallet = explode('||||', $wallet);
        $walletId = $wallet[0];
        $walletType = $wallet[1];

      
        $query = mysqli_query($connect, "INSERT INTO withdrawals(user_id, amount, wallet, wallet_type) VALUES('$uid', '$amount', '$walletId', '$walletType')");

        // return;
        if(!$query){
            $error = 'error requesting withdrawal';
            header('Location: ../withdraw.php?error='.$error.'#section1');
            return false;
        }else{
            $newBalance = $balance - $amount;
            $query = mysqli_query($connect, "UPDATE users SET balance = '$newBalance' WHERE id = '$uid'");
            if(!$query){
                $error = 'error updating balance';
                header('Location: ../withdraw.php?error='.$error.'#section1');
                return false;
            }
            header('Location: ../withdrawal-history.php?success=new withdrawal requested'.'#section1');
        }
     
    }else{
        header('Location: ../');
        return false;
    }

?>