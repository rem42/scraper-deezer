<?php

namespace Scraper\ScraperDeezer\Api;

use Scraper\ScraperDeezer\Model\SearchAlbum;

class DeezerSearchAlbumApi extends AbstractDeezerApi
{
    protected function getType(): string
    {
        return SearchAlbum::class;
    }
}
