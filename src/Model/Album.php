<?php declare(strict_types=1);

namespace Scraper\ScraperDeezer\Model;

class Album extends AlbumSearch
{
    public ?string $upc                = null;
    public ?string $share              = null;
    public ?Genres $genres             = null;
    public ?string $label              = null;
    public ?int $duration              = null;
    public ?int $fans                  = null;
    public ?string $releaseDate        = null;
    public ?bool $available            = null;
    public ?int $explicitContentLyrics = null;
    public ?int $explicitContentCover  = null;
    /** @var array<int, Contributor> */
    public array $contributors = [];
    public ?Tracks $tracks     = null;

    public function addContributors(Contributor $contributor): self
    {
        $this->contributors[] = $contributor;
        return $this;
    }
}
