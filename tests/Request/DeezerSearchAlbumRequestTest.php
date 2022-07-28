<?php

namespace Scraper\ScraperDeezer\Tests\Request;

use Scraper\ScraperDeezer\Model\AlbumSearch;
use Scraper\ScraperDeezer\Model\Artist;
use Scraper\ScraperDeezer\Model\SearchAlbum;
use Scraper\ScraperDeezer\Request\DeezerSearchAlbumRequest;

/**
 * @internal
 */
class DeezerSearchAlbumRequestTest extends AbtractRequestTest
{
    public function testDeezerSearchAlbumRequest(): void
    {
        $client = $this->getClient('search_album.json');

        $request = new DeezerSearchAlbumRequest('apiKey');
        $request
            ->setQuery('eminem')
        ;

        $result = $client->send($request);

        $this->assertInstanceOf(SearchAlbum::class, $result);
        $this->assertIsArray($result->data);
        $this->assertInstanceOf(AlbumSearch::class, $result->data[0]);
        $this->assertInstanceOf(Artist::class, $result->data[0]->artist);
    }
}
