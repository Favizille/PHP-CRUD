<?php include("dbcon.php");?>

<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        
        $query = "Delete from `students` where `id`  = '$id'";

        $result = mysqli_query($connection, $query);

        if (!$result){
            die("Query Failed" . mysqli_error($conection));
        }
        else{
            header('location:index.php?delete_msg= Sucessfully Deleted');
        }
    }

?>