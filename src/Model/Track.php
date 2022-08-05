<?php declare(strict_types=1);

namespace Scraper\ScraperDeezer\Model;

class Track
{
    public ?int $id = null;
    public ?bool $readable = null;
    public ?string $title = null;
    public ?string $titleShort = null;
    public ?string $titleVersion = null;
    public ?string $link = null;
    public ?int $duration = null;
    public ?int $rank = null;
    public ?bool $explicitLyrics = null;
    public ?int $explicitContentLyrics = null;
    public ?int $explicitContentCover = null;
    public ?string $preview = null;
    public ?string $md5Image = null;
    public ?Artist $artist = null;
    public ?Album $album = null;
    public ?string $type = null;
}
