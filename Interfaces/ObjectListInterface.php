<?php

namespace Nlib\ObjectList\Interfaces;

use Traversable;

interface ObjectListInterface {

    /**
     *
     * @return boolean
     */
    public function is_empty() : bool;

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