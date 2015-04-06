<?php namespace Codecasts\Restinga\Http\Format\Receive;

use Codecasts\Restinga\Http\ErrorBag;

/**
 * Trait ReceiveJsonErrors.
 */
trait ReceiveJsonErrors
{
    /**
     * @param int    $code
     * @param string $data
     *
     * @return \Codecasts\Restinga\Contracts\Http\ErrorBag
     */
    public function factoryErrors($code, $data)
    {
        $errors = json_decode($data, true);
        if (isset($this->errors_root) && $this->errors_root) {
            $errors = $errors[$this->errors_root];
        }

        return new ErrorBag($code, $errors, $data);
    }
}
