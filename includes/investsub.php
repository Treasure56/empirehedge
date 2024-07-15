<?php
    // require_once('connection.php');
    require_once('session.php');
    if(isset($_POST['submit'])){
        $amount = isset($_POST['amount']) ? $_POST['amount'] : '';
        $package = isset($_POST['package']) ? $_POST['package'] : '';
       

        if($amount == "" || $package == ""){
            $error = 'All fields are required';
            header('Location: ../invest.php?error='.$error.'#section1');
            return false;
        }

        $amount = sanitize($connect, $amount);
        $package = sanitize($connect, $package);
       $uid = $user['id'];

        $amount = (float) $amount;
        $balance = (float) $user['balance'];
        if($balance < $amount){
            $error = 'Insufficient balance';
            header('Location: ../invest.php?error='.$error.'#section1');
            return false;
        }

        $query = mysqli_query($connect, "SELECT * FROM plans WHERE id = '$package'");
        $row = mysqli_fetch_assoc($query);
        $min = $row['min'];
        $max = $row['max'];
        $package = $row;
        if($amount < $min || $amount > $max){
            $error = 'Amount must be between $'.formatAsMoney($min).' and $'.formatAsMoney($max);
            header('Location: ../invest.php?error='.$error.'#section1');
            return false;
        }


        // add transaction to investments table
        $planId = $package['id'];
        $date = new DateTime();
        $end_date = new DateTime();
        $end_date->modify('+'.$package['duration'].' days');
        $interval = new DateInterval('P1D');
        $dates = new DatePeriod($date, $interval, $end_date);
        $work_days = [];
        foreach ($dates as $day) {
            if ($day->format('N') < 6) {
                $work_days[] = $day->format('Y-m-d');
            }
        }
        $gain = $amount;
        foreach ($work_days as $day) {
            $gain += ($gain * $package['roi'])/100;
        }
        $payoutAmount = $gain;
        $end_date = $end_date->format('Y-m-d H:i:s');
        $query = mysqli_query($connect, "INSERT INTO investments(user_id, amount, plan_id, payout_amount, payout_at) VALUES('$uid', '$amount', '$planId', '$payoutAmount', '$end_date')");
        print_r("$query");
        print_r("'$uid', '$amount', '$planId', '$payoutAmount', '$end_date'");
        // return;
        if(!$query){
            $error = 'error adding investment';
            header('Location: ../invest.php?error='.$error.'#section1');
            return false;
        }else{
            $newBalance = $balance - $amount;
            $query = mysqli_query($connect, "UPDATE users SET balance = '$newBalance' WHERE id = '$uid'");
            if(!$query){
                $error = 'error updating balance';
                header('Location: ../invest.php?error='.$error.'#section1');
                return false;
            }
            header('Location: ../my-investment.php?success=new investment added'.'#section1');
        }
     
    }else{
        header('Location: ../');
        return false;
    }

?>