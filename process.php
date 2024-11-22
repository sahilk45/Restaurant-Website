<?php
if (isset($_POST["submit"])){
    $Dates = $_POST["Dates"];
    $Times = $_POST["Times"];
    $Members = $_POST["Members"];
    $names = $_POST["names"];
    $email= $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    if(!empty($Dates) && !empty($Times) && !empty($Members) &&!empty($names) && !empty($email) && !empty($phone) && !empty($message)){
        $link = mysqli_connect("localhost","root","","booktable");
        if($link==false){
            die(mysqli_connect_error());
        }
        $sql = "INSERT INTO `reservations`(`Dates`, `Times`, `Members`, `names`, `email`, `phone`, `message`) VALUES ('$Dates','$Times','$Members','$names','$email','$phone','$message')";
        if(mysqli_query($link,$sql)){
            echo "Record Submitted Successfully";
        }
        else{
            echo "Record Not Submitted";
        }
    }else{
        echo "please provide all information";
    }
    }
?>
