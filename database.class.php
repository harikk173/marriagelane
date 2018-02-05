<?php

//namespace database;

/*
* database class to execute query
*/
class database {

    public $lastId, $execution_status, $db_link;

    //PDO result object
    public $result;
    public function open_database_connection()
    {
        //TODO: connect to the database and return the link object
        $server = 'localhost';
        $dbname = 'marriage';
        $username = 'root';
        $password = 'root';

        $link = new \PDO("mysql:host=$server;dbname=$dbname", $username, $password);

        return $link;
    }


    public function close_database_connection($link)
    {
        //TODO: close database connection
        $link = null;
    }

    /*
    *   lastinsert Id
    */
    public function last_insert_id() {
        $this->lastId = $this->db_link->lastInsertId();
        return $this->lastId;
    }

    /* query execute public function
    *  A single public function that handles query preparation, parameter binding and query excution
    *  returns the fetched data 
    */
    public function query_execute($query, $values) {
        $link = $this->open_database_connection();
        
        //for last insert id function
        $this->db_link = $link;

        //check if the values is null
        //means it is an select query with no values
        if(empty($values)) {
            $result = $link->query($query);
        }
        else {

            //TODO: validation for insert
            $result = $link->prepare($query);
            foreach($values as $key => $val) {
                $result->bindParam($key, $values[$key]);
            }
           
            $this->execution_status = $result->execute();
        }

        //fetch row(s) if the query is select
        $select = substr($query, 0, 6);
        if($select === "SELECT" || $select === "select") {
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
        }
        else {
            $data = NULL;
        }

        //save last insert id
        $this->lastId = $link->lastInsertId();

        $this->close_database_connection($link);
        return $data;
    }

}

?>