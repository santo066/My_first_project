<?php

session_start();

$host="localhost";

$user="root";

$password="";

$db="schoolproject1";


$data=mysqli_connect($host, $user, $password, $db);

if($data === false)
{
    die("connection error");
}

if(isset($_POST['apply']));
{

    $data_name=$_POST['name'];
    $data_email=$_POST['email'];
    $data_phone=$_POST['phone'];
    $data_massage=$_POST['massage'];

    $sql="INSERT INTO admission(name, email, phone, massage) VALUES ('$data_name','$data_email','$data_phone','$data_massage')";

    $result=mysqli_query($data, $sql);

    if($result)
    {
        $_SESSION['massage']="your aplication sent successful";

        header("location:index.php");
    }

    else
    {
        echo "apply failed";
    }

}



?>