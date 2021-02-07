<?php

class SQLDatabase {

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $connection;

    public function __construct(
        $servername = "localhost", $username="phpmyadmin", 
        $password="phpmyadmin", $dbname="agenda") {

            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;
            $this->dbname = $dbname;
    }

    // Connect to database
    public function connection() {
        $this->connection = new mysqli(
            $this->servername, $this->username, $this->password, $this->dbname);
        
        self::checkConnectionDatabase($this->connection);

        return $this->connection;
    }

    // Disconect database
    public function disconnect() {
        $this->connection->close();
    }

    // Return result of query passed in params
    public function query($query) {
        $conn = $this->connection;

        if ($result = $conn -> query($query)) {
            return $result;
        } else {
            return "Database query failed";
        }
    }

    public function insert($obj) {
        print_r($obj);
    }

    public function delete() {

    }

    // Check connection database
    protected function checkConnectionDatabase($connection) {
        if ($connection->connect_errno) {
            echo "Connection Error".$connection->connect_errno;
            exit();
        }
    }
}
?>