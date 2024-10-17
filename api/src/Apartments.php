<?php

class Apartments
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Fetch all 
    public function getForSales()
    {
        $stmt = $this->pdo->query("SELECT tbl_apartment_for_sale.*,tbl_apartment_forsale_features.* FROM tbl_apartment_for_sale INNER JOIN tbl_apartment_forsale_features ON tbl_apartment_for_sale.apartment_code = tbl_apartment_forsale_features.apartment_code ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getForSalesById(string $code)
    {
        $stmt = $this->pdo->query("SELECT tbl_apartment_for_sale.*,tbl_apartment_forsale_features.* FROM tbl_apartment_for_sale INNER JOIN tbl_apartment_forsale_features ON tbl_apartment_for_sale.apartment_code = tbl_apartment_forsale_features.apartment_code WHERE tbl_apartment_for_sale.apartment_code = '$code' ");
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    
    public function getForRentalsById(string $code)
    {
        $stmt = $this->pdo->query("SELECT tbl_apartment_rentals.*,tbl_rental_apartment_features.* FROM tbl_apartment_rentals INNER JOIN tbl_rental_apartment_features ON tbl_apartment_rentals.apartment_code = tbl_rental_apartment_features.apartment_code WHERE tbl_apartment_rentals.apartment_code = '$code' ");
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    // Fetch all
    public function getForRentals()
    {
        $stmt = $this->pdo->query("SELECT tbl_apartment_rentals.*,tbl_rental_apartment_features.* FROM tbl_apartment_rentals INNER JOIN tbl_rental_apartment_features ON tbl_apartment_rentals.apartment_code = tbl_rental_apartment_features.apartment_code ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
