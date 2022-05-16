<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style1.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <?php include 'config.php' ?>
  <title>Dashboard</title>
</head>
<body>
  <div class="nav">
    <div class="topnav">
      <a class="active" href="#">Home</a>
      <a href="#news">News</a>
      <a href="career.php">Careers</a>
      <a href="#about">About</a>
    </div>
    <div class="main_content">
      <h1>Find Your <span>Desire</span> Job <br></h1>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore voluptatum mque pariatur!</p>
    </div>
  </div>
  <div class="row">
    <?php
    $sql = "SELECT `cname`, `position`, `jobdesc`, `skills`, `ctc` FROM `jobs`";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo '
          <div class="col">
            <div class="job">
            <h3 style="text-align:center;">' . $row['position'] . '</h3>
            <h4 style="text-align:center;">' . $row['cname'] . '</h4>
            <p style="color: black; text-align:justify;">' . $row['jobdesc'] . '</p>
            <p style="color: black;"><b>Skills Required : </b>' . $row['skills'] . '</p>
            <p style="color: black;"><b>CTC : </b>' . $row['ctc'] . '</p>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"  href="#" role="button" aria-expanded="false" aria-controls="collapseExample">
            APPLY NOW
          </button>
            </div>
          </div>';
      }
    } else {
      echo '';
    }
    ?>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply for job</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Apply for</label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">year passout</label>
            <input type="text" class="form-control" name="year">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>