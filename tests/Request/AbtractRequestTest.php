<?php declare(strict_types=1);

namespace Scraper\ScraperDeezer\Tests\Request;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Scraper\Scraper\Client;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

/**
 * @internal
 */
abstract class AbtractRequestTest extends TestCase
{
    private MockObject|ResponseInterface $responseInterface;

    protected function getClient(string $fixture): Client
    {
        $this->responseInterface = $this->createMock(ResponseInterface::class);
        $this->responseInterface
            ->method('getStatusCode')->willReturn(200);
        $this->responseInterface
            ->method('getContent')->willReturn(file_get_contents(__DIR__ . '/../fixtures/' . $fixture))
        ;
        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient
            ->method('request')->willReturnCallback([$this, 'requestCallback'])
        ;

        return new Client($httpClient);
    }

    public function requestCallback(string $method, string $url, array $options): ResponseInterface
    {
        $this->assertArrayHasKey('query', $options);
        $this->assertArrayHasKey('access_token', $options['query']);
        $this->assertEquals('apiKey', $options['query']['access_token']);
        $this->assertArrayHasKey('output', $options['query']);
        $this->assertEquals('json', $options['query']['output']);
        return $this->responseInterface;
    }
}
