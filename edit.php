<?php

// this first three line display the error on the browser
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function __autoload($class){

   require 'EmployerClass.php';

}


 

    $henkilo = new EmployerClass();



    $henkilo->getDatabaseConnection();
    $henkilo->getId($_GET['id']);
    $result =  $henkilo->editDataFromDatabase();

     $henkilo->getFirstname();
     $henkilo->getLastname();
     $henkilo->getTitle();
     $henkilo->getAddress();
     $henkilo->getMobile();




//  $henkilo = new EmployerClass();
//  if(isset($_POST['submit'])){
//    $firstname =  $_POST['firstname'];
//    $lastname =  $_POST['lastname'];
//    $title =  $_POST['title'];
//    $address =  $_POST['address'];
//    $mobile =  $_POST['mobile'];




//      $henkilo->setFirstname($firstname);
//      $henkilo->setLastname($lastname);
//      $henkilo->setTitle($title);
//      $henkilo->setAddress($address);
//      $henkilo->setMobile($mobile);

//      $henkilo->getDatabaseConnection();

//      $lisayOk = $henkilo->saveToDatabase();

//       if($lisayOk > 0){
//           echo "Lisäys onnistui";
//       }else{
//           echo "Lisäys ei onnistui";
//       }
//   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Member</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
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
    <h3 class="text-justify">Add Employee</h3>

    <form action="newEmployer.php" method="POST">
  <div class="form-group">
    <label for="firstname">Firstname</label>
    <input type="text" class="form-control" name="firstname" value="<?php echo $result['firstname']; ?>" placeholder="firstname">
  </div>
  <div class="form-group">
    <label for="firstname">Lastname</label>
    <input type="text" class="form-control" name="lastname" value="<?php echo $result['lastname']; ?>" placeholder="lastname">
  </div>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" value="<?php echo $result['title']; ?>"  placeholder="title">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address" value="<?php echo $result['address']; ?>" placeholder="address">
  </div>
  <div class="form-group">
    <label for="mobile">Mobile</label>
    <input type="number" class="form-control" name="mobile" value="<?php echo $result['mobile']; ?>" placeholder="mobile">
  </div>
  <button type="submit"  name="submit" class="btn btn-primary">Save</button>
</form>

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









