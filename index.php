<?php
require_once 'vendor/autoload.php';

use Jacob\WebtCoreServerResponsesWithPhpInJsonFormat\Seeder;

header('Content-Type: application/json');

$seeder = new Seeder();
$osts = $seeder->seeder();

// Get the requested OST ID from the URL
$requestedOstId = $_GET['id'] ?? null;

if ($requestedOstId === 'all') {
    // Output all OSTs as JSON
    echo json_encode($osts);	
} elseif ($requestedOstId !== null) {
    // Find the requested OST based on its ID
    $requestedOst = null;
    foreach ($osts as $ost) {
        if ($ost->getId() == $requestedOstId) {
            $requestedOst = $ost;
            break;
        }
    }
    if ($requestedOst !== null) {
        // Output the requested OST as JSON
        echo json_encode($requestedOst);
    } else {
        // OST not found, return an error JSON response
        echo json_encode(['error' => 'OST not found']);
    }
} else {
    // No OST ID provided in the URL, return an error JSON response
    echo json_encode(['error' => 'OST ID not provided']);
}
?>
