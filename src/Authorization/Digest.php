<?php namespace Codecasts\Restinga\Authorization;

/**
 * Class Digest.
 */
class Digest extends Basic
{
    /**
     * @var int
     */
    protected $method = CURLAUTH_DIGEST;
}
