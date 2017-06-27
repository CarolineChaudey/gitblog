<?php

  class Security
  {
    function cryptPassword($pswd) {
      return password_hash($pswd, PASSWORD_BCRYPT);
    }
  }

?>
