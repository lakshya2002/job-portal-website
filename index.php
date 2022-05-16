<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  <?php include 'config.php' ?>
  <title>Document</title>
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
      <a class="active" href="#home">Home</a>
      <a href="jobs.php">Candidates</a>
      <a href="#contact">Contact</a>
      <a href="#about">About</a>
    </div>

    <!-- Page content -->
    <div class="content">
      <div class="form">
        <p>
          <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            POST JOB
          </a>
        </p>
        <div class="collapse" id="collapseExample">
          <div class="card card-body">
            <form action="" method="POST">
              <div class="mb-3">
                <label for="Inputcompany" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="Inputcompany" name="cname">
              </div>
              <div class="mb-3">
                <label for="InputPosition" class="form-label">Position</label>
                <input type="text" class="form-control" id="InputPosition" name="pos">
              </div>
              <div class="mb-3">
                <label for="Inputskills" class="form-label">Skills Required</label>
                <input type="text" class="form-control" id="Inputskills" name="skills">
              </div>
              <div class="mb-3">
                <label for="Jobdesc" class="form-label">Job Description</label>
                <textarea name="jobdesc" class="form-control" id="" cols="154" rows="10"></textarea>
                <!-- <input type="text" class="form-control" id="JobDesc"> -->
              </div>
              <div class="mb-3">
                <label for="ctc" class="form-label">CTC</label>
                <input type="text" class="form-control" id="ctc" name="ctc">
              </div>
              <button type="submit" class="btn btn-primary" name="submitjob">Submit</button>
            </form>
          </div>
        </div>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">S.no</th>
              <th scope="col">Company Name</th>
              <th scope="col">Position</th>
              <th scope="col">CTC</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "select cname,position,ctc from jobs";
            $result = mysqli_query($conn, $sql);
            $i = 0;
            if ($result->num_rows > 0) {
              while ($rows = $result->fetch_assoc()) {
                echo "
                    <tr>
                      <th scope='row'>" . ++$i . "</td>
                      <td>" . $rows['cname'] . "</td>
                      <td>" . $rows['position'] . "</td>
                      <td>" . $rows['ctc'] . "</td>
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
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>