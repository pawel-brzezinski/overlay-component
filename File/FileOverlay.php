<?php

namespace PB\Component\Overlay\File;

use PB\Component\Overlay\FunctionOverlayInterface;

/**
 * Overlay for PHP file functions.
 *
 * @author Paweł Brzeziński <pawel.brzezinski@smartint.pl>
 *
 *
 */
class FileOverlay implements FunctionOverlayInterface
{
    /**
     * Call file_get_contents function.
     *
     * @link https://secure.php.net/manual/en/function.file-get-contents.php
     *
     * @param string $filename
     * @param bool $use_include_path
     * @param resource|null $context
     * @param int $offset
     * @param int|null $maxlen
     *
     * @return false|string
     */
    public function fileGetContents($filename, $use_include_path = false, $context = null, $offset = 0, $maxlen = null)
    {
        if (null === $maxlen) {
            return file_get_contents($filename, $use_include_path, $context, $offset);
        }

        return file_get_contents($filename, $use_include_path, $context, $offset, $maxlen);
    }

    /**
     * Call unlink function.
     *
     * @link https://secure.php.net/manual/en/function.unlink.php
     *
     * @param $filename
     * @param resource|null $context
     *
     * @return bool
     */
    public function unlink($filename, $context = null)
    {
        if (null === $context) {
            return unlink($filename);
        }

        return unlink($filename, $context);
    }
}
