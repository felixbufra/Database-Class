<?php

class DB
{

    /**
    *The variable $link stores the database connection
    *The other variables stores the needed information to connect to the database
    *Just change the values to connect to an other database
    *
    *@param string $dbhost
    *@param string $dbuser
    *@param string $dbpw
    *@param string $database
    *
    */

    protected $link;
    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpw = "root";
    private $database = "Test3";
    protected $table = "Klassenliste";

    public $log_db_errors;
    /**
    *The construct method is used to connect to the database, the connection informations
    *automatic set in the constructor
    *
    */
    public function __construct()
    {

        $this->link = new mysqli($this->dbhost, $this->dbuser, $this->dbpw, $this->database);
        if(mysqli_connect_errno())
        {
            $this->log_db_errors("Verbindung nicht möglich %s\n", mysqli_connect_error(), 'Fatal');
        }
    }

     /**
    *The get method can be passed a query,
    *then the values stored through a while loop
    *in an associative array $row
    *
    *@param string $sqlQuery
    *@param array $row
    *@param string $r
    *
    */
    public function get( $sqlQuery )
    {
        $row= array();
        $sqlQuery = mysqli_query($this->link, $sqlQuery);
        if( mysqli_error( $this->link ) )
        {
            $this->log_db_errors( mysqli_error( $this->link ), $sqlQuery, 'Fatal' );
            return false;
        }
        else
        {
            while( $r = mysqli_fetch_array( $sqlQuery, MYSQLI_ASSOC ) )
            {
                $row[] = $r;
            }
            return $row;
        }
    }

    // Insert method

    /**
    *The $insertQuery and $selectQuery consists of some parts, the first part is everytime the same,
    *with a foreach loop, the keys and values get written in the Query.
    *To insert a record, change the values and keys in index.php
    *
    *@param string $insertQuery
    *@param string $selectQuery
    *@param array $insertKeys
    *@param array $insertValues
    *@param array $selectParts
    */
    public function insert($values)
    {
        $insertQuery = "INSERT INTO $this->table (";
        $selectQuery = "SELECT * FROM $this->table WHERE ";
        foreach ($values as $key => $value) {
            $insertKeys[] = $key;
            if (is_string($value)) {
                $value = "'$value'";
            }
            $insertValues[] = $value;
        }
        $insertKeys = implode(", ",$insertKeys);
        $insertValues = implode(", ",$insertValues);
        $insertQuery .= "$insertKeys) values ";
        $insertQuery .= "($insertValues)";



        foreach ($values as $key => $value) {
            $selectParts[] = "$key = '$value' ";
        }
            $selectParts = implode("AND ", $selectParts);
            $selectQuery .= "$selectParts";

        $check = mysqli_query($this->link, $selectQuery);
        if($check->num_rows == 0)
            {
            echo "Data inserted";
            $result = mysqli_query($this->link, $insertQuery);
            return $result;
            }
            else
            {
            echo "record already exists!";
            }
        }


    /**
    *The update function, updates records in the database, by changing $key, $value and $id in index.php
    *
    *@param string $key
    *@param string $value
    *@param int $id
    *@param string $updateQuery
    *
    */

    public function update($key, $value, $id)
    {
        $updateQuery ="UPDATE $this->table SET $key = '$value' WHERE ID = '$id'";
        $result = mysqli_query($this->link, $updateQuery);
    }


    /**
    *The delete function, delete any record in database, by changing $id in index.php
    *
    *@param string $deleteQuery
    *@param string $selectQuery
    *@param int $id
    *
    */
    public function delete($id)
    {
        $deleteQuery = "DELETE FROM $this->table WHERE ID = '$id'";
        $selectQuery = "SELECT * FROM $this->table WHERE ID = '$id'";

        $check = mysqli_query($this->link, $selectQuery);
        if(mysqli_num_rows($check)==1)
        {
            $result = mysqli_query($this->link, $deleteQuery);
            echo "record deleted";
        }
        else
        {
            echo "record doesn't exists";
        }
    }

    /**
    * method to close the database connection
    *
    */
     public function disconnect()
    {
        echo "connection closed";
        mysqli_close( $this->link );
    }

}
