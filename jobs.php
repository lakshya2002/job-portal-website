<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <?php include 'config.php' ?>
</head>

<body>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">ADMIN DASHBOARD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <div class="sidebar"> 
      <a class="active" style="background-color: #d2d2d2; color: black;" href="index.php">Home</a>
      <a class="active2" href="#">Candidates</a>
      <a href="#contact">Contact</a>
      <a href="#about">About</a>
    </div>
    <div class="content">
        <table class="table" style="margin-top: 80px;">
          <thead>
            <tr>
              <th scope="col">S.no</th>
              <th scope="col">Name of Candidate</th>
              <th scope="col">Position</th>
              <th scope="col">Qualification</th>
              <th scope="col"> passout</th>
            </tr>
          </thead>
          <tbody>
            <!-- <tr>
              <th scope="row">1</th>
              <td>Ajay Sharma</td>
              <td>Software developer</td>
              <td><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
            </tr> -->
            <?php
            $sql = "select name,apply,qual,year from candidates";
            $result = mysqli_query($conn, $sql);
            $i = 0;
            if ($result->num_rows > 0) {
              while ($rows = $result->fetch_assoc()) {
                echo "
                    <tr>
                      <th scope='row'>" . ++$i . "</th>
                      <td>" . $rows['name'] . "</td>
                      <td>" . $rows['apply'] . "</td>
                      <td>" . $rows['qual'] . "</td>
                      <td>" . $rows['year'] . "</td>
                    </tr>";
              }
            } else {
              echo " ";
            }
            ?>
          </tbody>
        </table>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>