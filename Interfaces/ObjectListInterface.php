<?php

namespace Nlib\ObjectList\Interfaces;

use Traversable;

interface ObjectListInterface {

    /**
     *
     * @param [type] $Object
     * @return self
     */
    public function add($Object);

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