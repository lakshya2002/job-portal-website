<?php

$server='localhost';
$username='root';
$password='';
$database='portal';
$conn=mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
echo"";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $password=$_POST['password'];

    $sql = "INSERT INTO `users`(`name`, `email`, `number`, `password`) VALUES ('$name','$email','$number','$password')";
    $result1=mysqli_query($conn,$sql);
    if(mysqli_query($conn, $sql)){
        echo "Signup Successfully";
    }
    else{
        echo "Error: could not able to execute $sql. " .mysqli_error($conn) ;
    }
}

session_start();
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM users WHERE 'email'='$email' AND 'password'= '$password'";
    $result=mysqli_query($conn,$query);

    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if( mysqli_num_rows($result)==1){
        header('location:index.php');
    }
    else{
        $php_errormsg = 'invalid';
    }
    }

if(isset($_POST['submitjob'])){
    $cname=$_POST['cname'];
    $pos=$_POST['pos'];
    $jdesc=$_POST['jobdesc'];
    $skills=$_POST['skills'];
    $ctc=$_POST['ctc'];

    $sql= "INSERT INTO `jobs`( `cname`, `position`, `jobdesc`, `skills`, `ctc`) VALUES ('$cname','$pos','$jdesc','$skills','$ctc')";
    mysqli_query($conn,$sql)
    }

if(isset($_POST['apply'])){
    $name=$_POST['name'];
    $qual=$_POST['qual'];
    $apply=$_POST['apply'];
    $year=$_POST['year'];
    $sqll="INSERT INTO `candidates`(`id`, `name`, `apply`, `qual`, `year`) VALUES ('$name','$qual','$apply','$year')";
    mysqli_query($conn,$sqll)
    }
?>