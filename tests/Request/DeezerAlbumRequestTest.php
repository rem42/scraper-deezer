<?php declare(strict_types=1);

namespace Scraper\ScraperDeezer\Tests\Request;

use Scraper\ScraperDeezer\Model\Album;
use Scraper\ScraperDeezer\Model\Artist;
use Scraper\ScraperDeezer\Model\Contributor;
use Scraper\ScraperDeezer\Request\DeezerAlbumRequest;
use Symfony\Contracts\HttpClient\ResponseInterface;

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

    public function requestCallback(string $method, string $url, array $options): ResponseInterface
    {
        $this->assertEquals('GET', $method);
        $this->assertEquals('https://api.deezer.com/album/103248', $url);
        return parent::requestCallback($method, $url, $options);
    }
}
