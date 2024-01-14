<?php

namespace Jacob\WebtCoreServerResponsesWithPhpInJsonFormat;

class Song implements \JsonSerializable {
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
    function getTitle () {
        return $this->name;
    }
    function getArtist () {
        return $this->artist;
    }
    function getTrackNumber () {
        return $this->trackNumber;
    }
    function getDuration () {
        return $this->duration;
    }
    public function jsonSerialize() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'artist' => $this->artist,
            'trackNumber' => $this->trackNumber,
            'duration' => $this->duration,
        ];
    }
}
?>