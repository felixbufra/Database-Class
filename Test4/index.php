<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once( 'class.projekt.php' );

$get = new Projekt();
$sqlQuery = "SELECT * FROM Klassenliste WHERE Geburtsjahr = 1998";
$results = $get->get($sqlQuery);
foreach( $results as $row )
{
    echo 'ID: '. $row['ID'] .'<br />';
    echo 'Name: '. $row['Vorname'] .' ';
    echo $row['Nachname'] .'<br />';
    echo 'Geburtsjahr: '. $row['Geburtsjahr'] .'<br /><br />';

}

// $resultByID = new Projekt();
// $id = "22";
// $results = $resultByID->getID( $id );
// foreach( $results as $row )
// {
//     echo 'ID: '. $row['ID'] .'<br />';
//     echo 'Name: '. $row['Vorname'] .' ';
//     echo $row['Nachname'] .'<br />';
//     echo 'Geburtsjahr: '. $row['Geburtsjahr'] .'<br /><br />';

// }

// $resultByVorname = new Projekt();
// $vorname = "Felix";
// $results = $resultByVorname->getVorname( $vorname );
// foreach( $results as $row )
// {
//     echo 'ID: '. $row['ID'] .'<br />';
//     echo 'Name: '. $row['Vorname'] .' ';
//     echo $row['Nachname'] .'<br />';
//     echo 'Geburtsjahr: '. $row['Geburtsjahr'] .'<br /><br />';
//
// }

// $resultByNachname = new Projekt();
// $nachname = "Carr";
// $results = $resultByNachname->getNachname( $nachname );
// foreach( $results as $row )
// {
//     echo 'ID: '. $row['ID'] .'<br />';
//     echo 'Name: '. $row['Vorname'] .' ';
//     echo $row['Nachname'] .'<br />';
//     echo 'Geburtsjahr: '. $row['Geburtsjahr'] .'<br /><br />';

// }

// $resultByGeburtsjahr = new Projekt();
// $sqlbefehl = "1998";
// $results = $resultByGeburtsjahr->getGeburtsjahr( $sqlbefehl );
// foreach( $results as $row )
// {
//     echo 'ID: '. $row['ID'] .'<br />';
//     echo 'Name: '. $row['Vorname'] .' ';
//     echo $row['Nachname'] .'<br />';
//     echo 'Geburtsjahr: '. $row['Geburtsjahr'] .'<br /><br />';
//
// }


// ===Insert===
//
$insert = new Projekt();
 $values = array(
 "Vorname" => "Moritz",
 "Nachname" => "Mustermann",
 "Geburtsjahr" => 1991
    );
$result = $insert->insertData($values);
//

//====Update========

// $updateVorname = new Projekt();
//
// $value = "Felix";
// $id = 1;
// $result = $updateVorname->updateVorname($value, $id);
//
// $updateNachname = new Projekt();
//
// $value = "Bühring-Uhle";
// $id = 1;
// $result = $updateNachname->updateNachname($value, $id);
//
// $updateGeburtsjahr = new Projekt();
//
// $value = "1998";
// $id = 1;
// $result = $updateGeburtsjahr->updateGeburtsjahr($value, $id);


//=======Delete========
//
// $deleteFromDb = new Projekt();
// $id = "7";
// $result = $deleteFromDb->deleteData($id);


// $disconnect = new Projekt();
// $disconnect->disconnect();
