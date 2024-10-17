<?php
// config/Database.php

class Database
{
    private $host = 'localhost';
    private $dbname = 'myhome_db';
    private $username = 'root';
    private $password = '';
    private $charset = 'utf8mb4';
 
    private $pdo;
    // Method to get the PDO connection

    public function getConnection()
    {
        $this->pdo = null;

        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}";
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }

        return $this->pdo;
    }
}
