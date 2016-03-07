<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once( 'class.projekt.php' );

// $get = new Projekt();
// $sqlQuery = "SELECT * FROM pp2_project_master";
// $results = $get->get($sqlQuery);
// foreach( $results as $row )
// {
//  echo 'project_id: '. $row['project_id'] .'<br />';
//  echo 'project_name: '. $row['project_name'] .'<br /> ';
//  echo 'weatherAPI_name: '. $row['weatherAPI_name'] .'<br /> <br />';

// }

// $resultByID = new Projekt();
// $id = "173074";
// $results = $resultByID->getID( $id );
// foreach( $results as $row )
// {
//     echo 'project_id: '. $row['project_id'] .'<br />';
//     echo 'project_name: '. $row['project_name'] .'<br /> ';
//     echo 'weatherAPI_name: '. $row['weatherAPI_name'] .'<br />';
//
// }

// $resultByProject = new Projekt();
// $project = "Vardenis";
// $results = $resultByProject->getProject( $project );
// foreach( $results as $row )
// {
//     echo 'project_id: '. $row['project_id'] .'<br />';
//     echo 'project_name: '. $row['project_name'] .'<br /> ';
//     echo 'weatherAPI_name: '. $row['weatherAPI_name'] .'<br />';
//
// }

// $resultByNachname = new Projekt();
// $nachname = "Carr";
// $results = $resultByNachname->getNachname( $nachname );
// foreach( $results as $row )
// {
//     echo 'project_id: '. $row['project_id'] .'<br />';
//     echo 'project_name: '. $row['project_name'] .'<br /> ';
//     echo 'weatherAPI_name: '. $row['weatherAPI_name'] .'<br />';
//
// }

// $resultByGeburtsjahr = new Projekt();
// $sqlbefehl = "1998";
// $results = $resultByGeburtsjahr->getGeburtsjahr( $sqlbefehl );
// foreach( $results as $row )
// {
//     echo 'project_id: '. $row['project_id'] .'<br />';
//     echo 'project_name: '. $row['project_name'] .'<br /> ';
//     echo 'weatherAPI_name: '. $row['weatherAPI_name'] .'<br />';
//
// }


// ===Insert===
// //
// $insert = new Projekt();
//  $values = array(
//  "Vorname" => "Moritz",
//  "Nachname" => "Mustermann",
//  "Geburtsjahr" => 1991
//     );
// $result = $insert->insertData($values);
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
