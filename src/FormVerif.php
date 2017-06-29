<?php

  class FormVerif  {

    function verifyData($list) {
      foreach ($list as $key => $value) {
        if ($this->isNullOrEmpty($value)) {
          return false;
        }
        if (!$this->hasNoBlankSpace($value)) {
          return false;
        }
      }
      return true;
    }

    function isNullOrEmpty($field) {
      if ($field === null || $field === "") {
        return true;
      }
      return false;
    }

    function hasNoBlankSpace($field) {
      if (preg_match('/\s/', $field)) {
        return false;
      }
      return true;
    }
  }

?>