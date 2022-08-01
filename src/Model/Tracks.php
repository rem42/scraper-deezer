<?php declare(strict_types=1);

namespace Scraper\ScraperDeezer\Model;

class Tracks
{
    /** @var array<int, Track> */
    public array $data = [];

    public function addData(Track $datum): self
    {
        $this->data[] = $datum;
        return $this;
    }
}
