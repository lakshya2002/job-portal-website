<?php
// error_reporting(0);
$server='localhost';
$username='root';
$password='';
$database='portal';
$conn=mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
echo"";

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

    $job= "INSERT INTO `jobs`( `cname`, `position`, `jobdesc`, `skills`, `ctc`) VALUES ('$cname','$pos','$jdesc','$skills','$ctc')";
    mysqli_query($conn,$job);
}

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $apply=$_POST['apply'];
    $qual=$_POST['qual'];
    $year=$_POST['year'];
    $sqll="INSERT INTO `candidates`( `name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";
    mysqli_query($conn,$sqll);
}

?>