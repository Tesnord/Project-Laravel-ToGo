<?php

namespace App\Utils;

use Illuminate\Support\Facades\Cookie;

class MarketFavorites
{
    static private $instance;

    public function __construct()
    {
        try {
            $cookie_market_favorites = $_COOKIE['market_favorites'];
            $market_favorites = json_decode($cookie_market_favorites, true, 512, JSON_THROW_ON_ERROR);
            if (is_array($market_favorites["favorites"]))
            {
                $GLOBALS["favorites"] = $market_favorites["favorites"];
            }
        } catch (\JsonException $e) {
            $GLOBALS["favorites"] = array();
        }
    }
    static function getInstance(): self
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    function isFavorite($id): bool
    {
        if (is_array($GLOBALS['favorites']))
        {
            return in_array((string)$id, $GLOBALS['favorites'], true);
        }
        return false;
    }
}
