<?php include('header.php');?>
<?php include("dbcon.php");?>

<?php
 
 if(isset($_GET['id'])){
    $id = $_GET['id'];
 }
    $query = "SELECT * from `students` where `id` = '$id'";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query Failed".mysqli_error($connection));
    }else{
        
        // print_r($row);
        $row = mysqli_fetch_assoc($result);
    }
?>

<?php
    if(isset($_POST['update_student'])){

        if(isset($_GET['id_new'])){
            $idnew = $_GET['id_new'];
        }

        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $age = $_POST['age'];

        $query = "Update `students` set `first_name` = '$firstName', `last_name` = '$lastName', `age` = '$age' where `id` = '$idnew'";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Query Failed" . mysqli_error($connection));
        }
        else{
            header('location:index.php?update_msg= You have Succesully Updated the data');
        }
    }
?>
   
<form action="edit_page.php?id_new=<?php echo $id;?>" method="POST">
    <div class="form-group">
        <Input type="text" class="form-control my-3" placeholder="First Name" value="<?php echo $row['first_name'] ?>" name="first_name"/>
    </div>

    <div class="form-group">
        <Input type="text" class="form-control my-3" placeholder="Last Name" value="<?php echo $row['last_name'] ?>" name="last_name"/>
    </div>

    <div class="form-group">
        <Input type="text" class="form-control my-3" placeholder="Age" value="<?php echo $row['age'] ?>" name="age"/>
    </div>

    <input type="submit" class="btn btn-success" name="update_student" value="Update"/>

</form>

<?php include('footer.php');?>