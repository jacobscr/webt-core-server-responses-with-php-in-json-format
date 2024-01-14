<?php
require_once 'vendor/autoload.php';

use Jacob\WebtCoreServerResponsesWithPhpInJsonFormat\Seeder;

class Demo {
    public function demo(): void {
        $seeder = new Seeder();
        $ost = $seeder->seeder();
        echo $ost;
        // TODO: array zu string umwandeln und auf seite ausgeben
    }
}

$demo = new Demo();
$demo->demo();
?>