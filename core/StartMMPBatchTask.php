<?php
namespace wh\getui\core;

use wh\getui\protobuf\PBMessage;

class StartMMPBatchTask extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "\\wh\\getui\\core\\MMPMessage";
    $this->values["1"] = "";
    $this->fields["2"] = "\\wh\\getui\\protobuf\\type\\PBInt";
    $this->values["2"] = "";
    $this->fields["3"] = "\\wh\\getui\\protobuf\\type\\PBString";
    $this->values["3"] = "";
  }
  function message()
  {
    return $this->_get_value("1");
  }
  function set_message($value)
  {
    return $this->_set_value("1", $value);
  }
  function expire()
  {
    return $this->_get_value("2");
  }
  function set_expire($value)
  {
    return $this->_set_value("2", $value);
  }
  function seqId()
  {
    return $this->_get_value("3");
  }
  function set_seqId($value)
  {
    return $this->_set_value("3", $value);
  }
}

