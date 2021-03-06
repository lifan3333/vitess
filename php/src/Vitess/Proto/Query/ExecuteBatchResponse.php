<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: query.proto

namespace Vitess\Proto\Query {

  class ExecuteBatchResponse extends \DrSlump\Protobuf\Message {

    /**  @var \Vitess\Proto\Query\QueryResult[]  */
    public $results = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'query.ExecuteBatchResponse');

      // REPEATED MESSAGE results = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "results";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\Vitess\Proto\Query\QueryResult';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <results> has a value
     *
     * @return boolean
     */
    public function hasResults(){
      return $this->_has(1);
    }
    
    /**
     * Clear <results> value
     *
     * @return \Vitess\Proto\Query\ExecuteBatchResponse
     */
    public function clearResults(){
      return $this->_clear(1);
    }
    
    /**
     * Get <results> value
     *
     * @param int $idx
     * @return \Vitess\Proto\Query\QueryResult
     */
    public function getResults($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <results> value
     *
     * @param \Vitess\Proto\Query\QueryResult $value
     * @return \Vitess\Proto\Query\ExecuteBatchResponse
     */
    public function setResults(\Vitess\Proto\Query\QueryResult $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <results>
     *
     * @return \Vitess\Proto\Query\QueryResult[]
     */
    public function getResultsList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <results>
     *
     * @param \Vitess\Proto\Query\QueryResult $value
     * @return \Vitess\Proto\Query\ExecuteBatchResponse
     */
    public function addResults(\Vitess\Proto\Query\QueryResult $value){
     return $this->_add(1, $value);
    }
  }
}

