<?php namespace Codecasts\Restinga\Contracts\Http;

use Codecasts\Restinga\Contracts\Data\Resource;

interface Request extends ManipulateHeaders
{
    /**
     * @param \Codecasts\Restinga\Contracts\Data\Resource $resource
     * @param bool                                        $identified
     */
    public function __construct(Resource $resource, $identified = false);

    /**
     * @return string
     */
    public function url();

    /**
     * @return \Unirest\Response
     */
    public function get();

    /**
     * @return \Unirest\Response
     */
    public function post();

    /**
     * @return \Unirest\Response
     */
    public function put();

    /**
     * @return \Unirest\Response
     */
    public function delete();
}
