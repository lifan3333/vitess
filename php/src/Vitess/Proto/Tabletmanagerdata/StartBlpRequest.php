<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: tabletmanagerdata.proto
//   Date: 2016-01-22 01:34:35

namespace Vitess\Proto\Tabletmanagerdata {

  class StartBlpRequest extends \DrSlump\Protobuf\Message {


    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'tabletmanagerdata.StartBlpRequest');

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }
  }
}
