<?php

use \PhpRobotRemoteServer\KeywordCollector;

use \PHPUnit\Framework\TestCase;

class KeywordCollectorTests extends TestCase {

    private $keywordCollector;

    protected function setUp():void {
        $this->keywordCollector = new KeywordCollector();
    }

    protected function tearDown():void {

    }

    public function testSingleClass():void {
        $found = $this->keywordCollector->findFunctionsByClasses(__DIR__.'/test-libraries/ExampleLibrary.php');

        $this->assertEquals(array(
            '\\ExampleLibrary' => array(
                'truth_of_life' => array(
                    'arguments' => array(),
                    'documentation' => ''),
                'strings_should_be_equal' => array(
                    'arguments' => array('$str1', '$str2'),
                    'documentation' => '/**
   * Compare 2 strings. If they are not equal, throws exception.
   */')
                )), $found);
    }

    public function testMultipleClassesWithNamespace():void {
        $found = $this->keywordCollector->findFunctionsByClasses(__DIR__.'/test-libraries-multiple-files/another-subfolder/ClassesWithNamespace.php');

        $this->assertEquals(array(
            '\\TestNamespace\\ClassWithNamespace1' => array(
                'keywordWithNamespace1' => array(
                    'arguments' => array(),
                    'documentation' => ''),
                ),
            '\\TestNamespace\\ClassWithNamespace2' => array(
                'keywordWithNamespace2' => array(
                    'arguments' => array(),
                    'documentation' => ''),
                ),
            '\\TestNamespace\\ClassWithNamespace3' => array(
                'keywordWithNamespace3' => array(
                    'arguments' => array(),
                    'documentation' => ''),
                'keywordWithNamespace4' => array(
                    'arguments' => array(),
                    'documentation' => ''),
                'keywordWithNamespace5' => array(
                    'arguments' => array(),
                    'documentation' => ''),
                )), $found);
    }

    public function testBigClass():void {
        $found = $this->keywordCollector->findFunctionsByClasses(__DIR__.'/test-libraries-corner-cases/BigClass.php');

        $this->assertEquals(array(
            '\\BigClass' => array(
                'truth_of_life' => array(
                    'arguments' => array(),
                    'documentation' => ''),
                'strings_should_be_equal' => array(
                    'arguments' => array('$str1', '$str2'),
                    'documentation' => '/**
   * Compare 2 strings. If they are not equal, throws exception.
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   * Blablablablabla, blabla, blablablablabla, blaaaaaablablablablabla
   */'),
                'generate_lorem_ipsum' => array(
                    'arguments' => array(),
                    'documentation' => ''),
                )), $found);
    }

}
