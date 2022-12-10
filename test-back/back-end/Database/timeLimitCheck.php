<?php

$timeValidation = "SELECT * FROM workshop_participants WHERE email = '$email' ";
$timeResult = mysqli_fetch_all(mysqli_query($connection,$timeValidation),MYSQLI_ASSOC);

// Calculate current time in seconds
$date = new DateTime("now", new DateTimeZone('Africa/Cairo') );
$Ndate = $date->format('Y-m-d h:i:s') ;
$now = strtotime($Ndate) ;

// get the difference between current time and time participant filled the form
$diff = $now -  strtotime($timeResult[0]['created_at']) ;
$timeExhausted = $diff/( 60 * 60) ;

// Check if 24 hours passed then it's overdue
if($timeExhausted > 24){

    $overdueQuery = "UPDATE test SET overdue= 1 WHERE email= '$email'" ;
    if(mysqli_query($connection,$overdueQuery)){
        echo  '<script>alert("Update is success")</script>';
    }else{
        echo  '<script>alert("Update failed")</script>';

    }

}












?>