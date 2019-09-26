
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
    $delete =  $henkilo->deleteDataFromDatabase();

    if($delete == true){
        echo 'Employer delected';
        header('refresh:2; url=index.php');
    }
    else{
        echo 'Problem with the database, try again later';
        header('refresh:2; url=index.php');
    }



?>