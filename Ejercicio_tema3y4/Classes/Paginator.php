<?php
include_once "Constants.php";

class Paginator {

    private $currentPage;
    private $limit;

    public function __construct(
        $limit = Constants::MAX_ROWS_PAGE, $currentPage) {
            $this->currentPage = $currentPage;
            $this->limit = $limit;
    }

    public function getTotalPages($rows) {
        $numRows = $rows->num_rows;

        $totalPages = ceil($numRows / $this->limit);
        return $totalPages;
    }

    public function nextPage() {
        return $this->currentPage += 1;
    }

    public function previousPage() {
        return $this->currentPage -= 1;
    }

    public function getCurrentPage() {
        $this->currentPage = (isset($_GET['page']) && is_numeric($_GET['page']) ) ? $_GET['page'] : 1;

        return $this->currentPage;
    }
}

?>