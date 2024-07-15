<?php
    // require_once('connection.php');
    require_once('session.php');
    if(isset($_POST['submit'])){
        $wallet = isset($_POST['walletId']) ? $_POST['walletId'] : '';
        $amount = isset($_POST['amount']) ? $_POST['amount'] : '';
        // $amount = isset($_POST['amount']) ? $_POST['amount'] : '';
       
       

        if($wallet == "" || $amount == ""){
            $error = 'something went wrong';
            header('Location: ../payment.php?wallet_id='.$wallet.'&amount='.$amount.'&&error='.$error);
            return false;
        }

        $wallet = sanitize($connect, $wallet);
        $amount = sanitize($connect, $amount);
        $uid = $user['id'];

        if(isset($_FILES['image'])){
            $allow = array('png', 'jpeg', 'jpg', 'gif', 'heic');
            $filename = $_FILES['image']['name'];
            $fileTmp = $_FILES['image']['tmp_name'];
            $filesize = $_FILES['image']['size'];
            $fileext = explode('.', $filename);
            $fileActualext = strtolower(end($fileext));
            
            if($filesize < 800000){
                if(in_array($fileActualext, $allow)){
                    $pic = uniqid('',true).'.'.$fileActualext;
                    $location2 = '../image/deposits/'.$pic;
                    if(move_uploaded_file($fileTmp, $location2)){
                    
                        $sql = "INSERT INTO `deposits`(`user_id`, `amount`, `wallet_id`, `upload`) VALUES('$uid', '$amount', '$wallet', '$pic')";
                        $result = mysqli_query($connect, $sql);
                        if($result){
                            $success = 'deposit pendind admin approval';
                            header('Location: ../accounthistory.php?success='.$success);
                            return false;
                        }else{
                            $error = 'error creating deposit';
                            header('Location: ../payment.php?wallet_id='.$wallet.'&amount='.$amount.'&error='.$error);
                            return false;
                        }
                    }else{
                        $error = 'error uploading file';
                        header('Location: ../payment.php?wallet_id='.$wallet.'&amount='.$amount.'&error='.$error);
                        return false;
                    }
                }else{
                    $error = 'upload pictures only';
                    header('Location: ../payment.php?wallet_id='.$wallet.'&amount='.$amount.'&error='.$error);
                    return false;
                }
            }else{
                $error = 'File uploaded is too large';
                header('Location: ../payment.php?wallet_id='.$wallet.'&amount='.$amount.'&error='.$error);
                return false;
            }
        }
        
     
    }else{
        header('Location: ../');
        return false;
    }

?>