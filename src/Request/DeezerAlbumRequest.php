<?php declare(strict_types=1);

namespace Scraper\ScraperDeezer\Request;

use Scraper\Scraper\Attribute\Scraper;

#[Scraper(path: 'album/{id}')]
class DeezerAlbumRequest extends DeezerRequest
{
    protected int $id;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
}
