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

        $host="localhost";
        $user="root";
        $password="";
        $db="schoolproject1";

        $data=mysqli_connect($host, $user, $password, $db);

        if(isset($_POST['add_teacher']))
        {
            $t_name=$_POST['name'];

            $t_description=$_POST['description'];

            $file=$_FILES['image']['name'];

            $dst="./image/".$file;

            $dst_db="image/".$file;

            move_uploaded_file($_FILES['image']['tmp_name'], $dst);

            $sql="INSERT INTO teacher (name, description, image) VALUES ('$t_name','$t_description','$dst_db')";

            $result=mysqli_query($data, $sql);

            if ($result)
            {
                header('location: admin_add_teacher.php');
            }
        }

?>



<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dshbord</title>
        <link rel="stylesheet" href="admin.css">

        <style type="text/css">
            .div_deg
            {
                background-color: skyblue;
                width: 500px;
                padding-top: 70px;
                padding-bottom: 70px;
            }
        </style>

        <?php
        
        include 'admin_css.php';
        
        ?>

    </head>
    <body>

        <?php
        
        include 'admin_sidebar.php';
        
        ?>

        <div class="content">

            <center>

            <h1>Add Teacher</h1>

            <br>
            <br>

            <div class="div_deg">

                <form action="#" method="POST" enctype="multipart/form-data">

                    <div>
                        <label>Teacher name :</label>
                        <input type="text" name="name">
                    </div>

                    <br>

                    <div>
                        <label>Description :</label>
                        <textarea name="description"></textarea>
                    </div>

                    <br>

                    <div>
                        <label>Image :</label>
                        <input type="file" name="image">
                    </div>

                    <br>

                    <div>
                        
                        <input class="btn btn-primary" type="submit" name="add_teacher" value="Add teacher">
                    </div>

                </form>

            </div>


            </center>

        </div>


    </body>
</html>