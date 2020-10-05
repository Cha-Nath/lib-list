<?php

namespace Nlib\ObjectList\Interfaces;

interface ObjectListTraitInterface {

    /**
     * 
     * @param string $objectList
     * @return ObjectList
     */
    public function ObjectList(string $objectList = '') : ObjectList;

    /**
     *
     * @param ObjectList $objectList
     * @return self
     */
    public function setObjectList(ObjectList $objectList);
}