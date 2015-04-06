<?php namespace Codecasts\Restinga\Authorization;

/**
 * Class NTLM.
 */
class NTLM extends Basic
{
    /**
     * @var int
     */
    protected $method = CURLAUTH_NTLM;
}
