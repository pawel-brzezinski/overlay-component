<?php

namespace PB\Component\Overlay\File;

use PB\Component\Overlay\FunctionOverlayInterface;

/**
 * Overlay for file_get_contents function.
 *
 * @author Paweł Brzeziński <pawel.brzezinski@smartint.pl>
 *
 * @link https://secure.php.net/manual/en/function.file-get-contents.php
 */
class FileGetContentsOverlay implements FunctionOverlayInterface
{
    /**
     * Call file_get_contents function.
     *
     * @param string $filename
     * @param bool $use_include_path
     * @param resource|null $context
     * @param int $offset
     * @param int|null $maxlen
     *
     * @return false|string
     */
    public function call($filename, $use_include_path = false, $context = null, $offset = 0, $maxlen = null)
    {
        return file_get_contents($filename, $use_include_path, $context, $offset, $maxlen);
    }
}
