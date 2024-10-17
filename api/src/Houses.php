<?php

class Houses
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Fetch all 
    public function getForSales()
    {
        $stmt = $this->pdo->query("SELECT tbl_home_for_sale.*,tbl_home_forsale_features.* FROM tbl_home_for_sale INNER JOIN tbl_home_forsale_features ON tbl_home_for_sale.home_code = tbl_home_forsale_features.home_code ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getForSalesById(string $code)
    {
        $stmt = $this->pdo->query("SELECT tbl_home_for_sale.*,tbl_home_forsale_features.* FROM tbl_home_for_sale INNER JOIN tbl_home_forsale_features ON tbl_home_for_sale.home_code = tbl_home_forsale_features.home_code WHERE tbl_home_for_sale.home_code = '$code' ");
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function getForRentalsById(string $code)
    {
        $stmt = $this->pdo->query("SELECT tbl_home_rentals.*,tbl_rental_home_features.* FROM tbl_home_rentals INNER JOIN tbl_rental_home_features ON tbl_home_rentals.home_code = tbl_rental_home_features.home_code WHERE tbl_home_rentals.home_code = '$code' ");
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    // Fetch all
    public function getForRentals()
    {
        $stmt = $this->pdo->query("SELECT tbl_home_rentals.*,tbl_rental_home_features.* FROM tbl_home_rentals INNER JOIN tbl_rental_home_features ON tbl_home_rentals.home_code = tbl_rental_home_features.home_code ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
