<?php
// Monday 
    // 1. Create Db and insert at least 5 rows of data
    // 2. Connect DB to php project
    // 3. Create Landing Page for Project (show how to use index.php file and home.php file)
    // 4. Making the app dynamic with header and footer php files
// Tuesday
    // 5. Read data from DB
    // 6. Creating a form to add students
    // 7. Form Validation
// Wednesday 
    // 8. Insert Data Into MySql
    // 9. Design Edit and Delete button 
    // 10. Update and Delete Functionality (part 1): edit page, Bring data to edit page
// Thursday
    // 11. Update and Delete Functionality (part 2):, Actual Updating.
    // 12. Delete Operation

// Assignment
// Login/ register app with php




    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "php_crud");

    $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

    // Checking if the connection has been made or not

    if(!$connection){
        die("Connection Failed");
    }
    else{
        // echo "Connection has been made";
    }
?>