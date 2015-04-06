<?php namespace Codecasts\Restinga\Contracts\Service;

use Codecasts\Restinga\Contracts\Authorization;

interface Descriptor
{
    /**
     * @return string
     */
    public function service();

    /**
     * @return array
     */
    public function headers();

    /**
     * @return mixed
     */
    public function prefix();

    /**
     * @return Authorization
     */
    public function authorization();
}
