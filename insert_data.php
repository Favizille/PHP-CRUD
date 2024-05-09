<?php
include("dbcon.php");
if(isset($_POST['add_student'])){
    // echo "Add button has been clicked";

    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $age = $_POST['age'];

    // Validating data before pushing to DB
    if($firstName == "" || empty($firstName)){
        header('location:index.php?message=Enter your first name');
    }

    else{

        $query = "INSERT into `students` (`first_name`, `last_name`, `age`) values ('$firstName', '$lastName', '$age')";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die('Query had failed'. mysqli_error($connection));
        }
        else{
            header('location:index.php?insert_msg=Your Data has been added successfully');
        }
    }
}
?>