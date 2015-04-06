<?php namespace Codecasts\Restinga\Authorization;

/**
 * Class Any.
 */
class Any extends Basic
{
    /**
     * @var int
     */
    protected $method = CURLAUTH_ANY;
}
