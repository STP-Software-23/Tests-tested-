<?php



include('Database/dbConnect.php');





$emailValidation = "SELECT * FROM test WHERE email = '$email' ";
$emailResult = mysqli_fetch_all(mysqli_query($connection, $emailValidation), MYSQLI_ASSOC);


if (empty($emailResult)) {


    // Validate the fields of the form 
    include('BackValidation/validation.php');
    echo '1111111111111111111111111111111111111';
    echo 'inside check';
    // $check = 0;
    // $check = primaryFieldValidation($regexes, $primaryFields, $primaryFieldString);

        //Ready the fields for database insertion after validation

        
        // Insert fields to database table
        $sqlQuery = "INSERT INTO test(name,email,college,university,workshopID,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10) VALUES ('$name','$email','$college','$university','$workshopID','$Q0','$Q1','$Q2','$Q3','$Q4','$Q5','$Q6','$Q7','$Q8','$Q9')";

        if (mysqli_query($connection, $sqlQuery)) {
            echo $answers[0];
            echo '<script>alert("We`ll get in touch with you soon!"); window.location = "https://stp-org.com/"</script>';

            //sucesss
        } else {
            echo '<script>alert("Error in insertion");window.history.back()</script>';
    die();
    exit();
            // echo 'Error' . mysqli_error($connection);
        }
    
} else {
    echo '<script>alert("You can take the test again."); window.location = "https://stp-org.com/"</script>';
    // die();
    // exit();
}

// include('timeLimitCheck.php');


include('Database/dbDisconnect.php');













?>