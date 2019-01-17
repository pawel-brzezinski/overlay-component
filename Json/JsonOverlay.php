<?php

namespace PB\Component\Overlay\Json;

use PB\Component\Overlay\FunctionOverlayInterface;

/**
 * Overlay for PHP json functions.
 *
 * @author Paweł Brzeziński <pawel.brzezinski@smartint.pl>
 */
class JsonOverlay implements FunctionOverlayInterface
{
    /**
     * Call json_decode function.
     *
     * @link https://secure.php.net/manual/en/function.json-decode.php
     *
     * @param $json
     * @param bool $assoc
     * @param int $depth
     * @param int $options
     *
     * @return mixed
     */
    public function jsonDecode($json, $assoc = false, $depth = 512, $options = 0)
    {
        return json_decode($json, $assoc, $depth, $options);
    }

    /**
     * Call json_encode function.
     *
     * @link https://secure.php.net/manual/en/function.json-encode.php
     *
     * @param mixed $value
     * @param int $options
     * @param int $depth
     *
     * @return false|string
     */
    public function jsonEncode($value, $options = 0, $depth = 512)
    {
        return json_encode($value, $options, $depth);
    }
}
