<?php
require_once 'vendor/autoload.php';

use Jacob\WebtCoreServerResponsesWithPhpInJsonFormat\Seeder;

class Demo {
    public function demo(): void {
        $seeder = new Seeder();
        $ost = $seeder->seeder();
        
        foreach ($ost as $ostItem) {
            echo "OST Title: " . $ostItem->getTitle() . "<br>" . "<br>";
            foreach ($ostItem->getSongs() as $song) {
                echo "Song Title: " . $song->getTitle() . "<br>";
                echo "Song Artist: " . $song->getArtist() . "<br>";
                echo "Song Track Number: " . $song->getTrackNumber() . "<br>";
                echo "Song Duration: " . $song->getDuration() . "<br>";
                echo "<br>";
            }
        }
    }
}


$demo = new Demo();
$demo->demo();
?>