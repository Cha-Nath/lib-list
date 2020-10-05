<?php

namespace Nlib\ObjectList\Traits;

use Nlib\ObjectList\Classes\ObjectList;

trait ObjectListTrait {

    private $_ObjectList;

    #region Getter

    public function ObjectList(string $objectList = '') : ObjectList {
        if(!empty($objectList) && class_exists($objectList)) $this->setObjectList(new $objectList);
        elseif(empty($this->_ObjectList)) $this->setObjectList(new ObjectList);
        return $this->_ObjectList;
    }
    
    #endregion

    #region Setter

    public function setObjectList(ObjectList $objectList) : self { $this->_ObjectList = $objectList; return $this; }
    
    #endregion
}