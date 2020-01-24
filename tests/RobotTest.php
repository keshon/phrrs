<?php

use \PhpRobotRemoteServer\KeywordStore;
use \PHPUnit\Framework\TestCase;

class PybotTest extends TestCase {

    private function runPybotCheckSuccess($testLibraries, $robotFile) {
        $output = array();
        $exitCode = -1;

        $port = 8270;
        $pybotCommand = 'robot --variable PHP_REMOTE_HOST:localhost:'.$port.' -o NONE -l NONE -r NONE '.$robotFile;
        $robotRemoteCommand = 'php '.__DIR__.'/../src/StartRobotRemoteServer.php '.$testLibraries.' '.$port.' --quiet';

        $robotRemote = popen($robotRemoteCommand, 'w');
        // TODO wait a little? Not needed so far...

        exec($pybotCommand, $output, $exitCode);
        pclose($robotRemote);

        $this->assertEquals(0, $exitCode, "\n".implode("\n", $output)."\n");
    }

    public function testBasicKeywords():void {
        $this->runPybotCheckSuccess(__DIR__.'/test-libraries', __DIR__.'/test-robot-framework/BasicExample.robot');
    }

    public function testBasicList():void {
        $this->runPybotCheckSuccess(__DIR__.'/test-libraries-complex-data', __DIR__.'/test-robot-framework/BasicList.robot');
    }

    public function testBasicDictionary():void {
        $this->runPybotCheckSuccess(__DIR__.'/test-libraries-complex-data', __DIR__.'/test-robot-framework/BasicDictionary.robot');
    }

}
