<?php

namespace Nlib\ObjectList\Classes;

use ArrayIterator;
use IteratorAggregate;
use Traversable;

use Nlib\ObjectList\Interfaces\ObjectListInterface;

class ObjectList implements IteratorAggregate {

    protected $_ObjectList = [];

    #region Method

    public function add($Object, string $offset = '') : self {
        if(empty($offset) && !is_numeric($offset)) $this->_ObjectList[] = $Object;
        else $this->_ObjectList[$offset] = $Object;
        return $this;
    }

    public function count() : int { return count($this->_ObjectList); }
    
    public function is_empty() : bool { return empty($this->_ObjectList); }

    public function unset(string $offset = '') : self {
        if(!$this->exist($offset)) $this->_ObjectList = [];
        else unset($this->_ObjectList[$offset]);
        return $this;
    }

    public function exist(string $offset) : bool {
        return array_key_exists($offset, $this->_ObjectList);
    }

    public function get(string $offset = '') {
        if(!$this->exist($offset)) $get = $this->_ObjectList;
        else $get = $this->_ObjectList[$offset];
        return $get;
    }

    public function getElement(string $offset) {
        if(!$this->exist($offset)) $get = null;
        else $get = $this->_ObjectList[$offset];
        return $get;
    }

    #endregion
    
    #region Getter

    // public function getIterator() : Traversable { yield from new ArrayIterator($this->_ObjectList); }
    public function getIterator() : Traversable { yield from $this->_ObjectList; }
    // public function get(string $offset)

    #endregion

    #region Setter

    public function setObjectList(...$ObjectList) : self { $this->_ObjectList = $ObjectList; return $this; }

    #endregion

}