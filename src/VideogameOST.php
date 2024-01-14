<?php

namespace Jacob\WebtCoreServerResponsesWithPhpInJsonFormat;

class VideogameOST implements \JsonSerializable {
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
    function getId () {
        return $this->id;
    }
    function getTitle () {
        return $this->name;
    }
    function getSongs () {
        return $this->trackList;
    }
    public function jsonSerialize() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'videoGameName' => $this->videoGameName,
            'releaseYear' => $this->releaseYear,
            'trackList' => $this->trackList,
        ];
    }
}
?>