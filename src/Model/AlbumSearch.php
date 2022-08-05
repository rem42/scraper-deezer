<?php declare(strict_types=1);

namespace Scraper\ScraperDeezer\Model;

class AlbumSearch
{
    public ?int $id = null;
    public ?string $title = null;
    public ?string $link = null;
    public ?string $cover = null;
    public ?string $coverSmall = null;
    public ?string $coverMedium = null;
    public ?string $coverBig = null;
    public ?string $coverXl = null;
    public ?string $md5Image = null;
    public ?int $genreId = null;
    public ?int $nbTracks = null;
    public ?string $recordType = null;
    public ?string $tracklist = null;
    public ?bool $explicitLyrics = null;
    public ?Artist $artist = null;
    public ?string $type = null;
}
