<?php

class Offices
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Fetch all 
    public function getForSales()
    {
        $stmt = $this->pdo->query("SELECT tbl_office_for_sale.*,tbl_office_forsale_features.* FROM tbl_office_for_sale INNER JOIN tbl_office_forsale_features ON tbl_office_for_sale.office_code = tbl_office_forsale_features.office_code ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getForSalesById(string $code)
    {
        $stmt = $this->pdo->query("SELECT tbl_office_for_sale.*,tbl_office_forsale_features.* FROM tbl_office_for_sale INNER JOIN tbl_office_forsale_features ON tbl_office_for_sale.office_code = tbl_office_forsale_features.office_code WHERE tbl_office_for_sale.office_code = '$code' ");
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function getForRentalsById(string $code)
    {
        $stmt = $this->pdo->query("SELECT tbl_office_rentals.*,tbl_rental_office_features.* FROM tbl_office_rentals INNER JOIN tbl_rental_office_features ON tbl_office_rentals.office_code = tbl_rental_office_features.office_code WHERE tbl_office_rentals.office_code = '$code' ");
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    // Fetch all
    public function getForRentals()
    {
        $stmt = $this->pdo->query("SELECT tbl_office_rentals.*,tbl_rental_office_features.* FROM tbl_office_rentals INNER JOIN tbl_rental_office_features ON tbl_office_rentals.office_code = tbl_rental_office_features.office_code ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
