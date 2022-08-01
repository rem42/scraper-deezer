<?php declare(strict_types=1);

namespace Scraper\ScraperDeezer\Model;

class SearchAlbum extends Search
{
    /** @var array<int, AlbumSearch> */
    public array $data = [];

    public function addData(AlbumSearch $datum): self
    {
        $this->data[] = $datum;
        return $this;
    }
}
