<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbName = 'empirehedge_test';

// create connection
$connect = mysqli_connect($servername, $username, $password, $dbName);

function sanitize($connectionstring, $data)
{
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripcslashes($data);
    $data = mysqli_real_escape_string($connectionstring, $data);
    return $data;
}

function formatAsMoney($number)
{
    return number_format($number, 2, '.', ',');
}

function getQueryDetails($connect, $query)
{
    $result = mysqli_query($connect, $query);
    $rows = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows[0];
}


function formatDate($dateString)
{
    $date = new DateTime($dateString);
    return $date->format('Y/m/d h:i a');
}

// function getAccountBalance($connect, $uid){
//     $query = mysqli_query($connect, "SELECT * FROM users WHERE id = '$uid'");

// }


function arrayToJsonString($array)
{
    $newArray = array();
    foreach ($array as $item) {
        $newItem = array();
        // $newItem = array(
        //     'id' => $item['id'],
        //     'title' => $item['title'],
        // );
        foreach ($item as $key => $value) {
            if (!is_numeric($key)) {
                $newItem[$key] = $value;
            }
        }
        
        $newArray[] = $newItem;
    }
    return json_encode($newArray);
}

function getUserProfit($connect, $uid){
    $query = mysqli_query($connect, "SELECT * FROM investments WHERE user_id = '$uid' AND pending = 0");
    $total = 0;
    while ($row = mysqli_fetch_assoc($query)) {
        $diff = ((float) $row['payout_amount'] - (float) $row['amount']);
        $total += $diff;
    }

    return $total;
}

function getUserDeposits($connect, $uid){
    $query = mysqli_query($connect, "SELECT * FROM deposits WHERE user_id = '$uid' AND pending = 0");
    $total = 0;
    while ($row = mysqli_fetch_assoc($query)) {
        $total += (float) $row['amount'];
    }

    return $total;
}

function getUserWithdrawals($connect, $uid){
    $query = mysqli_query($connect, "SELECT * FROM withdrawals WHERE user_id = '$uid' AND pending = 0");
    $total = 0;
    while ($row = mysqli_fetch_assoc($query)) {
        $total += (float) $row['amount'];
    }

    return $total;
}


