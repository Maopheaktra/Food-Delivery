<?php

require_once '../../database/database.php';
require_once '../../models/chart.model.php';

// Instantiate the ChartModel
$chartModel = new ChartModel();

// Get sales data
$salesData = $chartModel->getSalesData();

// Get expenses data
$expensesData = $chartModel->getExpensesData();

// Get profit data
$profitData = $chartModel->getProfitData();

// Prepare data array to be encoded as JSON
$data = array(
    'sales' => $salesData,
    'expenses' => $expensesData,
    'profit' => $profitData
);

// Output JSON
header('Content-Type: application/json');
echo json_encode($data);