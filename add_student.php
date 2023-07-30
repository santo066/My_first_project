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

        if (isset($_POST['add_student']))
        {
            $username=$_POST['name'];
            $user_email=$_POST['email'];
            $user_phone=$_POST['phone'];
            $user_password=$_POST['password'];
            $usertype="student";

            $check="SELECT * FROM user WHERE username = '$username'";

            $check_user=mysqli_query($data,$check);

            $row_count=mysqli_num_rows($check_user);

            if($row_count == 1)
            {
                    echo "Username already exist. try another one";
            }
            else
            {

            $sql="INSERT INTO user(username, email, phone, usertype, password) VALUE ('$username','$user_email','$user_phone','$usertype','$user_password')";

            $result=mysqli_query($data,$sql);

            if($result)
            {
                echo " <script type='text/javascript'>
                
                    alert('data upload success');
                
                </script> ";
            }
            else
            {
                echo"uploaded failed";
            }

        }
        }

?>



<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dshbord</title>
        <link rel="stylesheet" href="admin.css">

        <style type="text/css">
            label
            {
                display: inline-block;
                text-align: right;
                width: 100px;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .div_deg 
            {
                background-color: skyblue;
                width: 400px;
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

            <h1>Add student</h1>

            <div class="div_deg">

                <form action="#" method="POST">

                    <div>
                        <label>Username</label>
                        <input type="text" name="name">
                    </div>

                    <div>
                        <label>Email</label>
                        <input type="email" name="email">
                    </div>

                    <div>
                        <label>Phone</label>
                        <input type="number" name="phone">
                    </div>

                    <div>
                        <label>Password</label>
                        <input type="text" name="password">
                    </div>

                    <div>
                        
                        <input type="submit" class="btn btn-primary" name="add_student" value="Add student">
                    </div>

                </form>

            </div>

        </center>

        </div>


    </body>
</html>