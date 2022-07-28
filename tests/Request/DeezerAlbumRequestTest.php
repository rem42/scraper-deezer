<?php

namespace Scraper\ScraperDeezer\Tests\Request;

use Scraper\ScraperDeezer\Model\Album;
use Scraper\ScraperDeezer\Model\Artist;
use Scraper\ScraperDeezer\Model\Contributor;
use Scraper\ScraperDeezer\Request\DeezerAlbumRequest;

/**
 * @internal
 */
class DeezerAlbumRequestTest extends AbtractRequestTest
{
    public function testDeezerAlbumRequest(): void
    {
        $client = $this->getClient('album.json');

        $request = new DeezerAlbumRequest('apiKey');
        $request
            ->setId(103248)
        ;

        $result = $client->send($request);

        $this->assertInstanceOf(Album::class, $result);
        $this->assertIsArray($result->contributors);
        $this->assertInstanceOf(Contributor::class, $result->contributors[0]);
        $this->assertInstanceOf(Artist::class, $result->artist);
    }
}
