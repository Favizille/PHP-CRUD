<?php include('header.php');?>
<?php include("dbcon.php");?>
    <div class="box1">
        <h3>ALL STUDENTS</h3>
        <button class="btn btn-warning"  data-toggle="modal" data-target="#exampleModal">Add Student</button>
    </div>

    <?php
    
            if(isset($_GET['message'])){
                echo "<h5>".$_GET['message']."</h5>";
            }
    ?>
    
    <?php
    
            if(isset($_GET['insert_msg'])){
                echo "<h4>".$_GET['insert_msg']."</h4>";
            }
    ?>
    
    <?php
    
            if(isset($_GET['update_msg'])){
                echo "<h4>".$_GET['update_msg']."</h4>";
            }
    ?>
    
    <?php
    
            if(isset($_GET['delete_msg'])){
                echo "<h4>".$_GET['delete_msg']."</h4>";
            }
    ?>
    
    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>AGE</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // select everthing from students table
            $query = "SELECT * FROM students";

            // execution of the query
            $result = mysqli_query($connection, $query);

            if(!$result){
                die("Query Failed". mysqli_error($connection));
            }
            else{
                while ($row = mysqli_fetch_assoc($result)) {
                    // echo "ID: " . $row['id'] . "<br>";
                    // echo "First Name: " . $row['first_name'] . "<br>";
                    // echo "Last Name: " . $row['last_name'] . "<br>";
                    // echo "Age: " . $row['age'] . "<br>";
                    // echo "<hr>";
                    ?>

                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['first_name'] ?></td>
                        <td><?php echo $row['last_name'] ?></td>
                        <td><?php echo $row['age'] ?></td>
                        <td><a href="edit_page.php?id=<?php echo $row['id'] ;?>" class="btn btn-success">Edit</a></td>
                        <td><a href="delete_page.php?id=<?php echo $row['id'] ;?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php
                    
                }
            }
            ?>
        </tbody>
    </table>


    <form action="insert_data.php" method="POST">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADD NEW STUDENT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <Input type="text" class="form-control my-3" placeholder="First Name" name="first_name"/>
                        <Input type="text" class="form-control my-3" placeholder="Last Name" name="last_name"/>
                        <Input type="text" class="form-control my-3" placeholder="Age" name="age"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <input type="submit" class="btn btn-warning" name="add_student" value="ADD"/>
                </div>
                </div>
            </div>
        </div>
    </form>
   <?php include('footer.php');?>