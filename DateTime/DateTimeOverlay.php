<?php

namespace PB\Component\Overlay\DateTime;

use PB\Component\Overlay\ObjectOverlayInterface;

/**
 * Overlay for DateTime object.
 *
 * @author Paweł Brzeziński <pawel.brzezinski@smartint.pl>
 *
 * @link https://secure.php.net/manual/en/class.datetime.php
 */
class DateTimeOverlay implements ObjectOverlayInterface
{
    /**
     * Create DateTime object.
     *
     * @param string $time
     * @param \DateTimeZone|null $timezone
     *
     * @return \DateTime
     *
     * @throws \Exception
     */
    public function create($time = 'now', \DateTimeZone $timezone = null)
    {
        return new \DateTime($time, $timezone);
    }
}
