<?php

namespace PB\Component\Overlay\Math;

use PB\Component\Overlay\FunctionOverlayInterface;

/**
 * Overlay for rand function.
 *
 * @author Paweł Brzeziński <pawel.brzezinski@smartint.pl>
 *
 * @link https://secure.php.net/manual/en/function.rand.php
 */
class Rand implements FunctionOverlayInterface
{
    /**
     * Call rand function.
     *
     * @param $min
     * @param $max
     *
     * @return int
     */
    public function call($min, $max)
    {
        return rand($min, $max);
    }
}
