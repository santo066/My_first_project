<!DOCTYPE html>
<html>
    <head>
        
        <title>Login From</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">


        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   
    </head>
    <body background="img/school2.jpg" class="body_deg">

        <center>

            <div class="from_deg">

                    <center class="title_deg">
                        Login From

                        <h4>

                            <?php
                            
                                session_start();
                                session_destroy();

                                error_reporting(0);

                                echo $_SESSION['loginmassage'];
                            
                            ?>

                        </h4>
                    </center>
  

                    <form action=".\login_check.php" method="POST" class="login_from" >

                        <div>
                            <label class="label_deg">username</label>
                            <input type="text" name="username">
                        </div>

                        <div>
                            <label class="label_deg">password</label>
                            <input type="password" name="password">
                        </div>
                        
                        <input type="submit" class="btn btn-primary" value="login">


                        
                    </form>

            </div>

        </center>



    </body>
</html>