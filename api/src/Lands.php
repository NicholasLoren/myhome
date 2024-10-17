<?php

class Lands
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Fetch all 
    public function getForSales()
    {
        $stmt = $this->pdo->query("SELECT tbl_land_for_sale.* FROM tbl_land_for_sale  ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getForSalesById(string $code)
    {
        $stmt = $this->pdo->query("SELECT tbl_land_for_sale.* FROM tbl_land_for_sale  WHERE tbl_land_for_sale.land_code = '$code' ");
        return $stmt->fetch(PDO::FETCH_OBJ);
    } 
}
