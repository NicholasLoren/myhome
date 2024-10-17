<?php

class Condos
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Fetch all 
    public function get()
    {
        $stmt = $this->pdo->query("SELECT tbl_condominiums.*,tbl_condominium_features.* FROM tbl_condominiums INNER JOIN tbl_condominium_features ON tbl_condominiums.condo_code = tbl_condominium_features.condo_code ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getById(string $code)
    {
        $stmt = $this->pdo->query("SELECT tbl_condominiums.*,tbl_condominium_features.* FROM tbl_condominiums INNER JOIN tbl_condominium_features ON tbl_condominiums.condo_code = tbl_condominium_features.condo_code WHERE tbl_condominiums.condo_code = '$code'");
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function getOrders($condoCode)
    {
        $stmt = $this->pdo->query("SELECT tbl_condo_orders.* FROM tbl_condo_orders WHERE tbl_condo_orders.condo_code = '$condoCode'");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
