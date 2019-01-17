<?php

namespace PB\Component\Overlay\Math;

use PB\Component\Overlay\FunctionOverlayInterface;

/**
 * Overlay for PHP math functions.
 *
 * @author Paweł Brzeziński <pawel.brzezinski@smartint.pl>
 */
class MathOverlay implements FunctionOverlayInterface
{
    /**
     * Call rand function.
     *
     * @link https://secure.php.net/manual/en/function.rand.php
     *
     * @param int $min
     * @param int $max
     *
     * @return int
     */
    public function rand($min, $max)
    {
        return rand($min, $max);
    }
}
