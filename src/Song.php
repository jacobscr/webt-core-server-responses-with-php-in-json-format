<?php

namespace Jacob\WebtCoreServerResponsesWithPhpInJsonFormat;

class Song {
    private int $id;
    private string $name;
    private string $artist;
    private int $trackNumber;
    private string $duration;

    public function __construct($id, $name, $artist, $trackNumber, $duration) {
        $this->id = $id;
        $this->name = $name;
        $this->artist = $artist;
        $this->trackNumber = $trackNumber;
        $this->duration = $duration;
    }
}
?>