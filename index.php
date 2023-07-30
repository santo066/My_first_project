
<?php

    error_reporting(0);
    session_start();
    session_destroy();

    if($_SESSION['massage'])
    {
        $massage=$_SESSION['massage'];

        echo "<script type='text/javascript'> 
        
            alert('$massage');
        
        </script>";
    }

    $host="localhost";
    $user="root";
    $password="";
    $db="schoolproject1";

    $data=mysqli_connect($host, $user, $password, $db);

    $sql="SELECT * FROM teacher";

   
        $result=mysqli_query($data, $sql);
    
?>





<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>This is my first project</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"crossorigin="anonymous"></script>

    </head>
    <body>
        
        <nav>
            <label class="logo">W-school</label>
        </nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>

        <div class="section">
            <label class="img_text">We tech students with care</label>
            <img class="main-img" src="img/school_management.jpg">
        </div>

        <div class="container">

            <div class="row">

                <div class="col-md-4">
                    
                    <img class="welcome_img" src="img/school2.jpg">
                
                </div>

                <div class="col-md-8">

                    <h1>Welcone to W-school</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi consectetur aliquid commodi voluptate consequatur dolorum alias ex. Quaerat, est dolorum doloremque aut ipsa maxime magnam eveniet inventore harum atque excepturi ipsum natus earum dolores velit sed blanditiis provident incidunt cum sunt, saepe, iusto repellat dolore distinctio. Vero consectetur debitis quidem deleniti repudiandae autem? Obcaecati voluptatem omnis nam ipsum soluta molestiae amet dicta veniam debitis. Dolorem a voluptatem quis delectus, similique, neque distinctio alias earum libero perspiciatis itaque placeat, ad ducimus porro eum tempora molestias quidem impedit quasi unde repudiandae. Harum temporibus dolor quos nostrum modi voluptas provident perspiciatis odio deleniti?</p>

                </div>

            </div>

        </div>

        <center>
            <h1>Our Teachers</h1>
        </center>

        <div class="container">

            <div class="row">

                <?php
                
                while($info=$result->fetch_assoc())
                {
                
                ?>

                <div class="col-md-4">

                    <img class="teacher" src="<?php echo "{$info['image']}" ?>">
                    
                    <h3><?php echo "{$info['name']}" ?></h3>

                    <h5><?php echo "{$info['description']}" ?></h5>

                </div>

                <?php
                
                }
                
                ?>

            </div>


        </div>

        <center>
            <h1>Our Courses</h1>
        </center>

        <div class="container">

            <div class="row">           

                <div class="col-md-4">

                    <img class="Courses" src="img/web.jpg">
                    <h4>Web</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, reiciendis debitis molestias ipsa ducimus voluptate minus velit odio voluptas atque?</p>

                </div>              

                <div class="col-md-4">

                    <img class="Courses" src="img/graphic.jpg">
                    <h4>Graphic</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, reiciendis debitis molestias ipsa ducimus voluptate minus velit odio voluptas atque?</p>

                </div>

                <div class="col-md-4">

                    <img class="Courses" src="img/marketing.png">
                    <h4>Marketing</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, reiciendis debitis molestias ipsa ducimus voluptate minus velit odio voluptas atque?</p>

                </div>

            </div>

        </div>

        <center>
            <h1>Admission From</h1>
        </center>

        <div align="center" class="admission_from">

            <form action="data_check.php" method="POST">

                <div class="adm_int">
                    <label class="label_text">Name</label>
                    <input class="input_deg" type="text" name="name">
                </div>

                <div class="adm_int">
                    <label class="label_text">Email</label>
                    <input class="input_deg" type="text" name="email">
                </div>

                <div class="adm_int">
                    <label class="label_text">Phone</label>
                    <input class="input_deg" type="text" name="phone">
                </div>

                <div class="adm_int">
                    <label class="label_text">Massage</label>
                    <textarea class="input_text" name="massage"></textarea>
                </div>

                <div class="adm_int">
                    <input class="btn btn-primary" id="submit" type="submit" value="apply" name="apply">
                </div>

            </form>

        </div>

        <footer>
            <h3 class="footer_text">All @copyright reserved by web tech knowdge</h3>
        </footer>

    </body>
</html>