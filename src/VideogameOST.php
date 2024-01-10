<?php

namespace Jacob\WebtCoreServerResponsesWithPhpInJsonFormat;

class VideogameOST {
    private int $id;
    private string $name;
    private string $videoGameName;
    private int $releaseYear;
    private array $trackList;

    public function __construct($id, $name, $videoGameName, $releaseYear, $trackList) {
        $this->id = $id;
        $this->name = $name;
        $this->videoGameName = $videoGameName;
        $this->releaseYear = $releaseYear;
        $this->trackList = $trackList;
    }
}
?>