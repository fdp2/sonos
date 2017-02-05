<?php

namespace duncan3dc\Sonos\Interfaces;

/**
 * Representation of a track.
 */
interface TrackInterface extends UriInterface
{
    /**
     * Get the name of the track.
     */
    public function getTitle(): string;

    /**
     * Get the name of the artist of the track.
     */
    public function getArtist(): string;

    /**
     * Get the name of the album of the track.
     */
    public function getAlbum(): string;

    /**
     * Get the track number.
     */
    public function getNumber(): int;

    /**
     * @var string $albumArt The full path to the album art for this track.
     */
    public function getAlbumArt(): int;

    /**
     * Get the ID of this track in the queue.
     */
    public function getQueueId(): string;
}
