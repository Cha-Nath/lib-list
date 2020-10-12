<?php

namespace Nlib\ObjectList\Classes;

use IteratorAggregate;
use Traversable;

use Nlib\ObjectList\Interfaces\ObjectListInterface;

class ObjectList implements ObjectListInterface, IteratorAggregate {

    protected $_ObjectList;

    #region Method

    public function add($Object) : self { $this->_ObjectList[] = $Object; return $this; }

    public function is_empty() : bool { return empty($this->_ObjectList); }

    #endregion
    
    #region Getter

    public function getIterator() : Traversable { yield from $this->_ObjectList; }

    #endregion

    #region Setter

    public function setObjectList(...$ObjectList) : self { $this->_ObjectList = $ObjectList; return $this; }

    #endregion

}