<?php

namespace Nlib\ObjectList\Interfaces;

use Traversable;

interface ObjectListInterface {

    /**
     *
     * @return Traversable
     */
    public function getIterator() : Traversable;

    /**
     *
     * @param [type] ...$ObjectList
     * @return self
     */
    public function setObjectList(...$ObjectList);
}