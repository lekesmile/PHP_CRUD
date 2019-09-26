<?php

class EmployerClass{

private $id;
private $firstname;
private $lastname;
private $title;
private $address;
private $mobile;

private $database;
         

/**
 * Get the value of id
 */ 
public function getId()
{
return $this->id;
}

/**
 * Set the value of id
 *
 * @return  self
 */ 
public function setId($id)
{
$this->id = $id;

return $this;
}
/**
 * Get the value of firstname
 */ 
public function getFirstname()
{
return $this->firstname;
}

/**
 * Set the value of firstname
 *
 * @return  self
 */ 
public function setFirstname($firstname)
{
$this->firstname = $firstname;

return $this;
}

/**
 * Get the value of lastname
 */ 
public function getLastname()
{
return $this->lastname;
}

/**
 * Set the value of lastname
 *
 * @return  self
 */ 
public function setLastname($lastname)
{
$this->lastname = $lastname;

return $this;
}

/**
 * Get the value of title
 */ 
public function getTitle()
{
return $this->title;
}

/**
 * Set the value of title
 *
 * @return  self
 */ 
public function setTitle($title)
{
$this->title = $title;

return $this;
}

/**
 * Get the value of address
 */ 
public function getAddress()
{
return $this->address;
}

/**
 * Set the value of address
 *
 * @return  self
 */ 
public function setAddress($address)
{
$this->address = $address;

return $this;
}

/**
 * Get the value of mobile
 */ 
public function getMobile()
{
return $this->mobile;
}

/**
 * Set the value of mobile
 *
 * @return  self
 */ 
public function setMobile($mobile)
{
$this->mobile = $mobile;

return $this;
}


//Get database connection

public function getDatabaseConnection(){
    include('Database.php');
   
    $this->database = new Database();
}

// Read

public function getAllFromDatabase(){
    return $this->database->suoritaHakuLause("SELECT * FROM employerinfo");
}

// Create
public function saveToDatabase(){
    return $this->database->suoritaPaivitysLause("INSERT INTO employerinfo(firstname, lastname, title, address, mobile) 
    values(?,?,?,?,?)" ,
 Array($this->firstname, $this->lastname, $this->title, $this->address, $this->mobile));
}

// Update
public function editDataFromDatabase(){
    return $this->database->suoritaPaivitysLause("UPDATE employerinfo SET ) values(?,?,?,?,?) WHERE id="  . $_GET['id'] ,
 Array($this->firstname, $this->lastname, $this->title, $this->address, $this->mobile));

    }

// Delect
public function deleteDataFromDatabase(){

    return $this->database->suoritaPaivitysLause("DELETE FROM employerinfo  WHERE id =" . $_GET['id']);
    
}


}

?>