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

        $sql="SELECT * FROM admission";

        $result=mysqli_query($data, $sql);


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

            <center>

            <h1>Applied For Admission</h1>

    </br>

            <table border="1px">
                <tr>
                    <th style="padding: 20px; font-size: 15px;">Name</th>
                    <th style="padding: 20px; font-size: 15px;">Email</th>
                    <th style="padding: 20px; font-size: 15px;">Phone</th>
                    <th style="padding: 20px; font-size: 15px;">Message</th>
                </tr>

                    <?php
                    
                        while($info=$result->fetch_assoc())
                        {

                    ?>

                <tr>
                    <td style="padding: 20px;">
                            <?php  echo "{$info['name']}";  ?>
                    </td>
                    <td style="padding: 20px;">
                            <?php  echo "{$info['email']}";  ?>
                    </td>
                    <td style="padding: 20px;">
                            <?php  echo "{$info['phone']}";  ?>
                    </td>
                    <td style="padding: 20px;">
                        <?php  echo "{$info['massage']}";  ?>
                    </td>
                </tr>

                <?php
                        }
                ?>

            </table>

                    </center>

        </div>


    </body>
</html>