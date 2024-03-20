<?php

class ChartModel
{
    private $connection;

    public function __construct()
    {
        global $hostname, $database, $username, $password;

        $dsn = "mysql:host=$hostname;dbname=$database;charset=utf8mb4";
        $this->connection = new PDO($dsn, $username, $password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getSalesData()
    {
        $sql = "SELECT month, amount FROM sales";
        $statement = $this->connection->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getExpensesData()
    {
        $sql = "SELECT month, amount FROM expenses";
        $statement = $this->connection->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProfitData()
    {
        $sql = "SELECT month, amount FROM profit";
        $statement = $this->connection->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
