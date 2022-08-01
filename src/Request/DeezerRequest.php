<?php declare(strict_types=1);

namespace Scraper\ScraperDeezer\Request;

use Scraper\Scraper\Annotation\Scraper;
use Scraper\Scraper\Request\RequestQuery;
use Scraper\Scraper\Request\ScraperRequest;

/**
 * @Scraper(host="api.deezer.com", scheme="HTTPS", method="GET")
 */
abstract class DeezerRequest extends ScraperRequest implements RequestQuery
{
    /** @var array<string, int|string|bool> */
    protected array $parameters = [];

    public function __construct(
        protected string $accessToken
    ) {}

    /**
     * @return array<string, bool|int|string>
     */
    public function getQuery(): array
    {
        return array_merge(
            [
                'access_token' => $this->accessToken,
                'output'       => 'json',
            ],
            $this->parameters
        );
    }
}
