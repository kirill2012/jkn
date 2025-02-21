<?php

namespace JikanPHP\Request\Manga;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class MangaStatsRequest
 *
 * @package JikanPHP\Request
 */
class MangaStatsRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * MangaStatsRequest constructor.
     *
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getPath($baseUrl): string
    {
        return sprintf('%s/manga/%d/stats', $baseUrl, $this->id);
    }
}
