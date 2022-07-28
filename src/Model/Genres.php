<?php

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
