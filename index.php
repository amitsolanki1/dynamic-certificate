<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Certificte</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container mt-4">
        <h3>Enter Your Details</h3>
        <form action="certificate.php" method="post">

            <label for="">Name</label>
            <input type="text"
            class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">

          <label for="">Course</label>
          <input type="text" class="form-control" name="course" id="" aria-describedby="helpId" placeholder="">

          <label for="">Start Date</label>
          <input type="date" class="form-control" name="start_date" id="" aria-describedby="helpId" placeholder="">
          
          <input type="submit" name="submit"value="Generate" class="mt-4 btn btn-primary btn-sm">
          <div class="mt-4">
              <?php
                  if(!empty($_SESSION['error'])){
                  ?>
                  <div class="alert alert-danger" role="alert"><strong><?=$_SESSION['error'];?></strong></div>
                  <?php
                  unset($_SESSION['error']);
                      }
                      if(isset($_SESSION['success']))
                      { 
                          ?>                   
                  <div class="alert alert-success" role="alert"><strong><?=$_SESSION['success'];?></strong>
                  <br>
                  <a href="<?=$_SESSION['filename']?>" download class="btn btn-info btn-sm">Download </a>
                  </div>
                  <?php
                  unset($_SESSION['success']);
                  }
                  ?>
          </div>
        </form>
    </div>
</body>
</html>