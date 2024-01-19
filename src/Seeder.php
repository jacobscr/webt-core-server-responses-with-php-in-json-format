<?php

namespace Jacob\WebtCoreServerResponsesWithPhpInJsonFormat;

use Jacob\WebtCoreServerResponsesWithPhpInJsonFormat\VideogameOST;
use Jacob\WebtCoreServerResponsesWithPhpInJsonFormat\Song;

class Seeder
{
    public function seeder(): array
    {
        return [
        new VideogameOST(1, "The Legend of Zelda: Ocarina of Time", "The Legend of Zelda: Ocarina of Time", 1998, [
            new Song(1, "Title Theme", "Koji Kondo", 1, "2:48"),
            new Song(2, "Enter Ganondorf", "Koji Kondo", 2, "0:08"),
            new Song(3, "Deku Tree", "Koji Kondo", 3, "2:12"),
            new Song(4, "Fairy Flying", "Koji Kondo", 4, "0:07"),
            new Song(5, "House", "Koji Kondo", 5, "0:07"),
            new Song(6, "Kokiri Forest", "Koji Kondo", 6, "2:12"),
            new Song(7, "Open Treasure Chest", "Koji Kondo", 7, "0:05"),
            new Song(8, "Item Catch", "Koji Kondo", 8, "0:05"),
            new Song(9, "Small Item Catch", "Koji Kondo", 9, "0:05"),
            new Song(10, "Heart Container Get", "Koji Kondo", 10, "0:05"),
            new Song(11, "Boss Clear", "Koji Kondo", 11, "0:08"),
            new Song(12, "Zelda's Theme", "Koji Kondo", 12, "0:07"),
            new Song(13, "Lon Lon Ranch", "Koji Kondo", 13, "2:12"),
            new Song(14, "Kakariko Village", "Koji Kondo", 14, "2:12")
        ]),
        new VideogameOST(2, "The Legend of Zelda: Majora's Mask", "The Legend of Zelda: Majora's Mask", 2000, [
            new Song(1, "Title Theme", "Koji Kondo", 1, "2:48"),
            new Song(2, "Enter Ganondorf", "Koji Kondo", 2, "0:08"),
            new Song(3, "Deku Tree", "Koji Kondo", 3, "2:12"),
            new Song(4, "Fairy Flying", "Koji Kondo", 4, "0:07"),
            new Song(5, "House", "Koji Kondo", 5, "0:07"),
            new Song(6, "Kokiri Forest", "Koji Kondo", 6, "2:12"),
            new Song(7, "Open Treasure Chest", "Koji Kondo", 7, "0:05"),
            new Song(8, "Item Catch", "Koji Kondo", 8, "0:05"),
            new Song(9, "Small Item Catch", "Koji Kondo", 9, "0:05"),
            new Song(10, "Heart Container Get", "Koji Kondo", 10, "0:05"),
            new Song(11, "Boss Clear", "Koji Kondo", 11, "0:08"),
            new Song(12, "Zelda's Theme", "Koji Kondo", 12, "0:07"),
            new Song(13, "Lon Lon Ranch", "Koji Kondo", 13, "2:12"),
            new Song(14, "Kakariko Village", "Koji Kondo", 14, "2:12")
        ]),
        new VideogameOST(3, "The Legend of Zelda: The Wind Waker", "The Legend of Zelda: The Wind Waker", 2002, [
            new Song(1, "Title Theme", "Koji Kondo", 1, "2:48"),
            new Song(2, "Enter Ganondorf", "Koji Kondo", 2, "0:08"),
            new Song(3, "Deku Tree", "Koji Kondo", 3, "2:12"),
            new Song(4, "Fairy Flying", "Koji Kondo", 4, "0:07"),
            new Song(5, "House", "Koji Kondo", 5, "0:07"),
            new Song(6, "Kokiri Forest", "Koji Kondo", 6, "2:12"),
            new Song(7, "Open Treasure Chest", "Koji Kondo", 7, "0:05"),
            new Song(8, "Item Catch", "Koji Kondo", 8, "0:05"),
            new Song(9, "Small Item Catch", "Koji Kondo", 9, "0:05"),
            new Song(10, "Heart Container Get", "Koji Kondo", 10, "0:05"),
            new Song(11, "Boss Clear", "Koji Kondo", 11, "0:08"),
            new Song(12, "Zelda's Theme", "Koji Kondo", 12, "0:07"),
            new Song(13, "Lon Lon Ranch", "Koji Kondo", 13, "2:12"),
            new Song(14, "Kakariko Village", "Koji Kondo", 14, "2:12")
        ])];
    }
}
?>