<?php
include_once "Constants.php";
include_once "SQLDatabase.php";

class Paginator {

    private $currentPage;
    private $limit;
    private $totalRecords;
    private $conn;

    public function __construct(
        $limit = Constants::MAX_ROWS_PAGE) {
            $this->conn = new SQLDatabase();
            $this->limit = $limit;
            $this->totalRecords = $this->setTotalRecords();
    }

    public function getData() {
        $start = 0;
        
        if ($this->getCurrentPage() > 1) {
            $start = ($this->getCurrentPage() * $this->limit) - $this->limit;
        }

        $this->conn->connection();
        $data = $this->conn->query("SELECT id,nom,cognoms FROM contactes LIMIT $start,$this->limit");
        $this->conn->disconnect();

        $json = mysqli_fetch_all($data, MYSQLI_ASSOC);
        return json_encode($json);
    }

    public function setTotalRecords() {

        $this->conn->connection();
        $data = $this->conn->query("SELECT id FROM contactes");
        $this->conn->disconnect();

        $numRows = $data->num_rows;

        return $numRows;
    }

    public function getTotalPages($rows) {
        $numRows = $rows->num_rows;

        $totalPages = ceil($numRows / $this->limit);
        return $totalPages;
    }

    public function getCurrentPage() {
        $this->currentPage = (isset($_GET['page']) && is_numeric($_GET['page']) ) ? $_GET['page'] : 1;

        return $this->currentPage;
    }
}

?>