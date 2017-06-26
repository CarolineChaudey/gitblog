<?php

class FormVerif  {

  function verifyData($data) {
    if ($this->areNullOrEmpty($data) === true) {
      return false;
    }
    return true;
  }

  function areNullOrEmpty($list) {
    foreach ($list as $key => $value) {
      if ($this->isNullOrEmpty($value)) {
        return true;
      }
    }
    return false;
  }

  function isNullOrEmpty($field) {
    if ($field === null || $field === "") {
      return true;
    }
    return false;
  }
}

?>
