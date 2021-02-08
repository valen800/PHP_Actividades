<?php
include_once "Person.php";

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
        $conn = $this->connection;
        $queryString = 'INSERT INTO contactes (nom, cognoms, direccio, localitat, provincia, cp, telefon1, telefon2, fax, mail) VALUES ("'. $obj->getName() .'","'.$obj->getLastname().'","'.$obj->getAddress().'","'.$obj->getLocation().'","'.$obj->getProvince().'","'.$obj->getPostalCode().'","'.$obj->getPhone1().'","'.$obj->getPhone2().'","'.$obj->getFax().'","'.$obj->getEmail().'");';
        
        if ($conn->query($queryString)) {
            echo "Succesful";
        } else {
            echo "Error";
        }
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