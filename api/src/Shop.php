<?php

class Shops
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Fetch all 
    public function getForSales()
    {
        $stmt = $this->pdo->query("SELECT tbl_shop_for_sale.*,tbl_shop_forsale_features.* FROM tbl_shop_for_sale INNER JOIN tbl_shop_forsale_features ON tbl_shop_for_sale.shop_code = tbl_shop_forsale_features.shop_code ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getForSalesById(string $code)
    {
        $stmt = $this->pdo->query("SELECT tbl_shop_for_sale.*,tbl_shop_forsale_features.* FROM tbl_shop_for_sale INNER JOIN tbl_shop_forsale_features ON tbl_shop_for_sale.shop_code = tbl_shop_forsale_features.shop_code WHERE tbl_shop_for_sale.shop_code = '$code' ");
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function getForRentalsById(string $code)
    {
        $stmt = $this->pdo->query("SELECT tbl_shop_rentals.*,tbl_rental_shop_features.* FROM tbl_shop_rentals INNER JOIN tbl_rental_shop_features ON tbl_shop_rentals.shop_code = tbl_rental_shop_features.shop_code WHERE tbl_shop_rentals.shop_code = '$code' ");
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    // Fetch all
    public function getForRentals()
    {
        $stmt = $this->pdo->query("SELECT tbl_shop_rentals.*,tbl_rental_shop_features.* FROM tbl_shop_rentals INNER JOIN tbl_rental_shop_features ON tbl_shop_rentals.shop_code = tbl_rental_shop_features.shop_code ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
