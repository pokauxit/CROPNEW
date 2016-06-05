<?php

 

namespace System\ORM;

/**
 * Description of JoinModel
 *
 * @author test
 */
class JoinModel extends ORM {
     
    public $fk = null;
    public $display = null;
    public $moreDisplay = null;
    public function __construct($name) { 
        parent::__construct();
     
          $this->setName($name);
          $this->pk();
    }
}
