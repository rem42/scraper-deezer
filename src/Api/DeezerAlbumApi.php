<?php

namespace Scraper\ScraperDeezer\Api;

use Scraper\ScraperDeezer\Model\Album;

class DeezerAlbumApi extends AbstractDeezerApi
{
    protected function getType(): string
    {
        return Album::class;
    }
}
