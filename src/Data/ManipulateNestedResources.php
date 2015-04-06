<?php namespace Codecasts\Restinga\Data;

use Codecasts\Restinga\Contracts\Data\Resource as ResourceContract;

/**
 * Trait ManipulateNestedResources.
 */
trait ManipulateNestedResources
{
    /**
     * @var \Codecasts\Restinga\Contracts\Data\Resource
     */
    protected $parent = null;

    /**
     * @param \Codecasts\Restinga\Contracts\Data\Resource $resource
     *
     * @return \Codecasts\Restinga\Contracts\Data\Resource
     */
    public function childResource(ResourceContract $resource)
    {
        $resource->setParentResource($this);

        return $resource;
    }

    /**
     * @param \Codecasts\Restinga\Contracts\Data\Resource $resource
     */
    public function setParentResource(ResourceContract $resource)
    {
        $this->parent = $resource;
    }

    /**
     * @return \Codecasts\Restinga\Contracts\Data\Resource
     */
    public function getParentResource()
    {
        return $this->parent;
    }

    /**
     * @return bool
     */
    public function hasParentResource()
    {
        return !empty($this->parent);
    }
}
