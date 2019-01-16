<?php

namespace PB\Component\Overlay\Json;

use PB\Component\Overlay\FunctionOverlayInterface;

/**
 * Overlay for json_decode function.
 *
 * @author Paweł Brzeziński <pawel.brzezinski@smartint.pl>
 *
 * @link https://secure.php.net/manual/en/function.json-decode.php
 */
class JsonDecodeOverlay implements FunctionOverlayInterface
{
    /**
     * Call json_decode function.
     *
     * @param $json
     * @param bool $assoc
     * @param int $depth
     * @param int $options
     *
     * @return mixed
     */
    public function call($json, $assoc = false, $depth = 512, $options = 0)
    {
        return json_decode($json, $assoc, $depth, $options);
    }
}
