<?php
    
    session_start();

        if(! isset($_SESSION['username']))
        {
            header("location:login.php");
        }

        else if ($_SESSION['usertype'] == 'student')
        {
            header("location:login.php");
        }

?>



<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dshbord</title>
        <link rel="stylesheet" href="admin.css">

        <?php
        
        include 'admin_css.php';
        
        ?>

    </head>
    <body>

        <?php
        
        include 'admin_sidebar.php';
        
        ?>

        <div class="content">

            <h1>Admin Dashboard</h1>

        </div>


    </body>
</html>