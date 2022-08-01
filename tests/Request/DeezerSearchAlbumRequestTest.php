<?php declare(strict_types=1);

namespace Scraper\ScraperDeezer\Tests\Request;

use Scraper\ScraperDeezer\Model\AlbumSearch;
use Scraper\ScraperDeezer\Model\Artist;
use Scraper\ScraperDeezer\Model\SearchAlbum;
use Scraper\ScraperDeezer\Request\DeezerSearchAlbumRequest;
use Symfony\Contracts\HttpClient\ResponseInterface;

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

    public function requestCallback(string $method, string $url, array $options): ResponseInterface
    {
        $this->assertEquals('GET', $method);
        $this->assertEquals('https://api.deezer.com/search/album', $url);
        $this->assertArrayHasKey('query', $options);
        $this->assertArrayHasKey('q', $options['query']);
        $this->assertEquals('eminem', $options['query']['q']);
        return parent::requestCallback($method, $url, $options);
    }
}
