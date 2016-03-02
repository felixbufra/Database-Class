<?php
require_once "config.db.php";

Class Projekt extends DB
{
     /**
    *The variable $link stores the database connection
    *The other variables stores the needed information to connect to the database
    *Just change the values to connect to an other database
    *$table stores and use the name of the table
    *
    *@param string $dbhost
    *@param string $dbuser
    *@param string $dbpw
    *@param string $database
    *@param string $table
    *
    */

    public $log_db_errors;



//================GET METHODS================
/**
*change the value of $id in index.php to get data searched by ID
*
*@param int $id
*/

public function getID($id){
    return $this->get("SELECT * FROM $this->table WHERE ID = '$id'");

}

/**
*change the value of $vorname in index.php to get data searched by Vorname
*
*@param string $vorname
*/

public function getVorname($vorname){
    return $this->get("SELECT * FROM $this->table WHERE Vorname = '$vorname'");

}

/**
*change the value of $nachname in index.php to get data searched by Nachname
*
*@param string $nachname
*/

public function getNachname($nachname){
    return $this->get("SELECT * FROM $this->table WHERE Nachname = '$nachname'");

}

/**
*change the value of $geburtsjahr in index.php to get data searched by Geburtsjahr
*
*@param int $geburtsjahr
*/

public function getGeburtsjahr($geburtsjahr){
    return $this->get("SELECT * FROM $this->table WHERE Geburtsjahr = '$geburtsjahr'");
}
//=================END GET METHODS================


//Insert Method

/**
*Just change the values in index.php to insert new data
*
*@param array $values
*/

public function insertData ($values)
{
  $this->insert ($values);
}


//============UPDATE METHODS==============
public function updateVorname($value, $id)
{
  $this->update($this->key = 'Vorname', $value, $id);
}

public function updateNachname($value, $id)
{
  $this->update($this->key = 'Nachname', $value, $id);
}

public function updateGeburtsjahr($value, $id)
{
  $this->update($this->key= 'Geburtsjahr', $value, $id);
}
//===========END UPDATE METHODS=====================


//Delete Method

/**
*Change the ID in index.php to delete any record from the database
*
*@param int $id
*/

public function deleteData($id)
{
  $this->delete($id);
}


    public function disconnect()
    {
        mysqli_close( $this->link );
    }

}
