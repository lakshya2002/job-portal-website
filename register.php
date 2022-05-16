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
      echo "Records inserted Successfully";
    }
    else{
      echo "ERROR: could not able to signup$sql.".mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Document</title>
    <style>
      body{
    background-image: url('Background.jpg');
    background-size: cover;    
}
.container form {
    margin-top: 3.5em;
    margin-left:14em ;
    margin-right:14em;
    padding: 30px;
    box-shadow: 10px 10px 10px 10px #1f1c1c65;
}
    </style>
</head>
<body>

  <div class="container">
    <form method="POST">
      <div class="mb-3">
        <label for="exampleInputName" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="exampleInputName" name="name" required>
      </div>

      <div class="mb-3">
        <label for="exampleInputMail" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail" name="email" >
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputNumber" class="form-label">Phone Number</label>
        <input type="number" class="form-control" id="exampleInputNumber" name="number" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword2" class="form-label"> Confirm Password</label>
        <input type="password" class="form-control" id="exampleInputPassword2" name="cpassword" required>
      </div>
      <!-- <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div> -->
      <!-- <button type="submit" class="btn btn-primary" name="submit">Submit</button> -->
      <input type="submit" class="btn btn-primary" name="submit">
      <hr>
      Already registered? <a href="login.php"> Login </a>
    </form>  
  </div>
    
</body>
</html>