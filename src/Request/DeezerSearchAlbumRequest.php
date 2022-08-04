<?php declare(strict_types=1);

namespace Scraper\ScraperDeezer\Request;

use Scraper\Scraper\Attribute\Scraper;

#[Scraper(path: 'search/album')]
class DeezerSearchAlbumRequest extends DeezerRequest
{
    public function setQuery(string $query): self
    {
        $this->parameters['q'] = $query;

        return $this;
    }
}
