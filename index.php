<?php

// this first three line display the error on the browser
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function __autoload($class){

   require 'EmployerClass.php';

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employer Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Emp Oy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="newEmployer.php">New Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
  </div>
</nav>
<body>
<div class="container mt-5">
<div class="jumbotron">
<div class="col-lg-12">
    <h3 class="text-justify">Employers Details</h3>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Title</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $henkilo = new EmployerClass();
    $henkilo->getDatabaseConnection();
     $rows = $henkilo->getAllFromDatabase();
     foreach ($rows as $row){

        ?>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['firstname']; ?></td>
      <td><?php echo $row['lastname']; ?></td>
      <td><?php echo $row['title']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><?php echo $row['mobile']; ?></td>
      <td>
      <!-- <button delete-id="" class="btn btn-sm btn-primary edit-object" href="edit.php?id="> Edit</a> -->
          
      <button edit-id="<?php echo $row['id'] ?>"class="btn btn-primary edit-object" type="submit">Edit</button>
      <button delete-id="<?php echo $row['id'] ?>"class="btn btn-danger delete-object" type="submit">Delect</button>
      </td>
    </tr>
    <?php
    }
     ?>
  </tbody>
</table>
    
</div>
</div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<script src="./javascript/index.js"></script>
<script src="https://kit.fontawesome.com/2aa4888d4f.js"></script>
</body>
</html>









