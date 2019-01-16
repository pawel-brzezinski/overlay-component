<?php

namespace PB\Component\Overlay\Json;

use PB\Component\Overlay\FunctionOverlayInterface;

/**
 * Overlay for json_encode function.
 *
 * @author Paweł Brzeziński <pawel.brzezinski@smartint.pl>
 *
 * @link https://secure.php.net/manual/en/function.json-decode.php
 */
class JsonEncodeOverlay implements FunctionOverlayInterface
{
    /**
     * Call json_encode function.
     *
     * @param mixed $value
     * @param int $options
     * @param int $depth
     *
     * @return false|string
     */
    public function call($value, $options = 0, $depth = 512)
    {
        return json_encode($value, $options, $depth);
    }
}
