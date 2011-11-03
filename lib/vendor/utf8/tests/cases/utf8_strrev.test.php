<?php
/**
* @version $Id: utf8_strrev.test.php 323 2008-12-07 10:54:44Z kupokomapa $
* @package utf8
* @subpackage Tests
*/

//--------------------------------------------------------------------
/**
* Includes
* @package utf8
* @subpackage Tests
*/
require_once(dirname(__FILE__).'/../config.php');
require_once UTF8 . '/strrev.php';

//--------------------------------------------------------------------
/**
* @package utf8
* @subpackage Tests
*/
class test_utf8_strrev extends UnitTestCase {

    function test_utf8_strrev() {
        $this->UnitTestCase('utf8_strrev()');
    }
    
    function testReverse() {
        $str = 'Iñtërnâtiônàlizætiøn';
        $rev = 'nøitæzilànôitânrëtñI';
        $this->assertEqual(utf8_strrev($str),$rev);
    }
    
    function testEmptyStr() {
        $str = '';
        $rev = '';
        $this->assertEqual(utf8_strrev($str),$rev);
    }
    
    function testLinefeed() {
        $str = "Iñtërnâtiôn\nàlizætiøn";
        $rev = "nøitæzilà\nnôitânrëtñI";
        $this->assertEqual(utf8_strrev($str),$rev);
    }
    
}

//--------------------------------------------------------------------
/**
* @package utf8
* @subpackage Tests
*/
if (!defined('TEST_RUNNING')) {
    define('TEST_RUNNING', true);
    $test = &new test_utf8_strrev();
    $reporter = & getTestReporter();
    $test->run($reporter);
}
