<?php namespace Codecasts\Restinga\Contracts\Data;

/**
 * Interface ManipulateResponses.
 */
interface ManipulateResponses
{
    /**
     * @return bool
     */
    public function checkResponse();

    /**
     * @return bool
     */
    public function hasErrors();

    /**
     * @return \Codecasts\Restinga\Contracts\Http\ErrorBag|null
     */
    public function getErrors();
}
