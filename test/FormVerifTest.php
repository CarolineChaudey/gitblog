<?php
  declare(strict_types=1);

  use PHPUnit\Framework\TestCase;

  /**
  * @covers FormVerif
  */

  final class FormVerifTest extends TestCase
  {
    // verifyData
    public function verifyData_ok() {

    }

    public function verifyData_error() {

    }
    // areOK
    public function areOK_ok() {

    }

    public function areOK_withNullOrEmpty() {

    }

    public function areOK_withBlankspace() {

    }
    // isNullOrEmpty
    public function testIsNullOrEmpty_ok() {
      $this->assertEquals(FormVerif::isNullOrEmpty("test"), false);
    }

    public function testIsNullOrEmpty_empty() {
      $this->assertEquals(FormVerif::isNullOrEmpty(""), true);
    }

    public function testIsNullOrEmpty_null() {
      $this->assertEquals(FormVerif::isNullOrEmpty(null), true);
    }
    // hasNoBlankSpace

    public function hasNoBlankSpace_error() {
      // at start
      $this->assertEquals(FormVerif::hasNoBlankSpace(" test"), false);
      // in the middle
      $this->assertEquals(FormVerif::hasNoBlankSpace("te st"), false);
      // at end
      $this->assertEquals(FormVerif::hasNoBlankSpace("test "), false);
      //only blankspace
      $this->assertEquals(FormVerif::hasNoBlankSpace("    "), false);
    }

    public function hasNoBlankSpace_ok() {
      $this->assertEquals(FormVerif::hasNoBlankSpace("test"), true);
    }
  }
?>
