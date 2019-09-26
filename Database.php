<?php

class Database {


// Private For database connection
private $yhteys;

private function openConnection(){
$servername = "localhost";
$myDB = "Employer";
$username = "omobaba";
$password = "mypassword";


try {
    $this->yhteys = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $this->yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $this->yhteys;
    // echo "connection Ok";
    }
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
    }


}
 // Suorittaa SQL-kyselyjä
 public function suoritaHakuLause($sqlLause, $parametritaulukko = Array()){
    // Avataan tietokantayhteys
    $this->openConnection();
    // Valmistellaan hakukysely
    $suoritettavaLause = $this->yhteys->prepare($sqlLause);
    // Liitetään parametritaulukon arvot merkityn paramterin tilalle 
    // ja suoritetaan kysely
    $suoritettavaLause->execute($parametritaulukko);
    // haetaan tulostaulukko ja suljetaan yhteys
    $tulosjoukko = $suoritettavaLause->fetchAll(PDO::FETCH_ASSOC);
    // Suljetaan yhteys
    $this->closeConnection();
    // Palautetaan tulosjoukko
    return $tulosjoukko;
}


// Metodia kutsutaan kun suoritetaan lisäys(insert), poisto(delect) tai päivitys(update)
public function suoritaPaivitysLause($sqlLause, $parametritaulukko = Array()){
    $this->openConnection();

    try {
        // Valmistellaa SQL-Lause
        $suoritettavaLause = $this->yhteys->prepare($sqlLause);
        // Suoritetaan sql lause palvelimella
        $suoritettavaLause->execute($parametritaulukko);
       // Palautta tietueiden määrän(0-ei tietuetta)
       $lkm = $suoritettavaLause->rowCount();
       // Suljetaan yhteys
    $this->closeConnection();
    } catch (PDOException $e) {
        // Jos tuli virhe asetaan tietueiden mää nollaksi
        $lkm= 0;
        
    }
    
    return $lkm;
}

private function closeConnection(){
    $this->connect = null;
}
  
}
?>