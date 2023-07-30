<?php

    session_start();

        if(! isset($_SESSION['username']))
        {
            header("location:login.php");
        }

        else if ($_SESSION['usertype'] == 'admin')
        {
            header("location:login.php");
        }

?>



<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dshbord</title>
        <link rel="stylesheet" href="admin.css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>
    <body>

        <header class="header">

            <a href="">Student Dashboard<a>

            <div class="logout">

                <a class="btn btn-primary" href="logout.php">Logout</a>

            </div>

        </header>

        <aside>

            <ul>
                <li>
                    <a href="">Profile</a>
                </li>

                <li>
                    <a href="">My Courses</a>
                </li>

                <li>
                    <a href="">My Result</a>
                </li>

                
            </ul>

        </aside>

        <div class="content">

            <h1>Sidebar Accordion</h1>

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti nobis debitis impedit quod expedita veritatis. Exercitationem vel hic repellendus iste suscipit ipsa, aspernatur amet ab. Reprehenderit, exercitationem iure atque enim hic voluptates delectus voluptatem debitis ab pariatur error quas qui ducimus laudantium aspernatur alias dolores provident lnda aperiam illum, ipsam maxime, optio ratione impedit corporis reprehenderit. Asperiores, perferendis rem. In tempora debitis reiciendis cum, voluptatibus nesciunt hic praesentium odit porro saepe impedit incidunt? Ea deleniti aperiam quod officiis incidunt obcaecati voluptatibus non accusantium sed delectus.</p>

            <input type="text" name="">

        </div>


    </body>
</html>