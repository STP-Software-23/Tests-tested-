<?php
// $workshopIDs = [
//     "machineLearning",
//     "robotics",
//     "python",
//     "graphicDesign",
//     "montage",
//     "trainingTrainees",
//     "storyTelling",
// ];
// $NumOFQuestions = [
//     "machineLearning" => 10,
//     "robotics" => 8,
//     "python" => 10,
//     "graphicDesign" => 6,
//     "montage" => 8,
//     "trainingTrainees" => 7,
//     "storyTelling" => 8,
// ];

function readSubmittedAnswers($submittedAnswers , $workshopId)  {
    for($i=0 ; $i<10 ; $i++ ){
    // This is made under the assumption that all the question names are incremented from Q1 till end
    $submittedAnswers[$i] = htmlspecialchars($_POST['Q' . $i]);
    };
return $submittedAnswers;
};



if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
    $university = htmlspecialchars($_POST['university']);
    $college = htmlspecialchars($_POST['college']);
    $workshopID = htmlspecialchars($_POST['workshopID']);
    $Q0 = isset($_POST['Q0']) ? $_POST['Q0'] : '--';
    $Q1 = isset($_POST['Q1']) ? $_POST['Q1'] : '--' ;
    $Q2 = isset($_POST['Q2']) ? $_POST['Q2'] : '--' ;
    $Q3 = isset($_POST['Q3']) ? $_POST['Q3'] : '--' ;
    $Q4 = isset($_POST['Q4']) ? $_POST['Q4'] : '--' ;
    $Q5 = isset($_POST['Q5']) ? $_POST['Q5'] : '--' ;
    $Q6 = isset($_POST['Q6']) ? $_POST['Q6'] : '--' ;
    $Q7 = isset($_POST['Q7']) ? $_POST['Q7'] : '--' ;
    $Q8 = isset($_POST['Q8']) ? $_POST['Q8'] : '--' ;
    $Q9 = isset($_POST['Q9']) ? $_POST['Q9'] : '--' ;
    

    include('Database/dbInsertion.php');


}












?>