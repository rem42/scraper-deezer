<?php

namespace Scraper\ScraperDeezer\Request;

use Scraper\Scraper\Annotation\Scraper;

/**
 * @Scraper(path="search/album")
 */
class DeezerSearchAlbumRequest extends DeezerRequest
{
    public function setQuery(string $query): self
    {
        $this->parameters['q'] = $query;

        return $this;
    }
}
