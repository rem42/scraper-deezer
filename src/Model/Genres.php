<?php declare(strict_types=1);

namespace Scraper\ScraperDeezer\Model;

class Genres
{
    /** @var array<int, Genre> */
    public array $data = [];

    public function addData(Genre $datum): self
    {
        $this->data[] = $datum;
        return $this;
    }
}
