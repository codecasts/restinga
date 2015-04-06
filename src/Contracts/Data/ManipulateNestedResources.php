<?php namespace Codecasts\Restinga\Contracts\Data;

use Codecasts\Restinga\Contracts\Data\Resource as ResourceContract;

/**
 * interface ManipulateNestedResources.
 */
interface ManipulateNestedResources
{
    /**
     * @param \Codecasts\Restinga\Contracts\Data\Resource $resource
     *
     * @return \Codecasts\Restinga\Contracts\Data\Resource
     */
    public function childResource(ResourceContract $resource);

    /**
     * @param \Codecasts\Restinga\Contracts\Data\Resource $resource
     */
    public function setParentResource(ResourceContract $resource);

    /**
     * @return \Codecasts\Restinga\Contracts\Data\Resource
     */
    public function getParentResource();

    /**
     * @return bool
     */
    public function hasParentResource();
}
