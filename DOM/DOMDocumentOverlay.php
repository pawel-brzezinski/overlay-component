<?php

namespace PB\Component\Overlay\DOM;

use PB\Component\Overlay\ObjectOverlayInterface;

/**
 * Overlay for DateTime object.
 *
 * @author Paweł Brzeziński <pawel.brzezinski@smartint.pl>
 *
 * @link https://secure.php.net/manual/en/class.domdocument.php
 */
class DOMDocumentOverlay implements ObjectOverlayInterface
{
    /**
     * Create DOMDocument object.
     *
     * @param string $version
     * @param string $encoding
     *
     * @return \DOMDocument
     *
     * @throws \Exception
     */
    public function create($version, $encoding)
    {
        return new \DOMDocument($version, $encoding);
    }
}
