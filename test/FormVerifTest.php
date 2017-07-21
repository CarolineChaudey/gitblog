<?php
  declare(strict_types=1);

  use PHPUnit\Framework\TestCase;

  /**
  * @covers FormVerif
  */

  final class FormVerifTest extends TestCase
  {
    // verifyJoinData
    public function testVerifyJoinData_ok() {
      $list = ["test1", "test2", "test3"];
      $this->assertEquals((new FormVerif())->verifyJoinData($list), true);
    }

    public function testVerifyJoinData_withNull() {
      $list = ["test1", "test2", null];
      $this->assertEquals((new FormVerif())->verifyJoinData($list), false);
    }

    public function testVerifyJoinData_withEmpty() {
      $list = ["test1", "test2", ""];
      $this->assertEquals((new FormVerif())->verifyJoinData($list), false);
    }

    public function testVerifyJoinData_withBlankspace() {
      $list = ["test1", "test2", "    "];
      $this->assertEquals((new FormVerif())->verifyJoinData($list), false);
    }

    //verifyLoginData
    public function testVerifyLoginData_ok() {
      $list = ["test1", "test2", "test3"];
      $this->assertEquals((new FormVerif())->verifyLoginData($list), true);
    }

    public function testVerifyLoginData_withNull() {
      $list = ["test1", "test2", null];
      $this->assertEquals((new FormVerif())->verifyLoginData($list), false);
    }

    public function testVerifyLoginData_withEmpty() {
      $list = ["test1", "test2", ""];
      $this->assertEquals((new FormVerif())->verifyLoginData($list), false);
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
    public function testHasNoBlankSpace_error() {
      // at start
      $this->assertEquals(FormVerif::hasNoBlankSpace(" test"), false);
      // in the middle
      $this->assertEquals(FormVerif::hasNoBlankSpace("te st"), false);
      // at end
      $this->assertEquals(FormVerif::hasNoBlankSpace("test "), false);
      //only blankspace
      $this->assertEquals(FormVerif::hasNoBlankSpace("    "), false);
    }

    public function testHasNoBlankSpace_ok() {
      $this->assertEquals(FormVerif::hasNoBlankSpace("test"), true);
    }
  }
?>
