<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Ideia\Module;

class BasicTest extends TestCase
{
    public function testIfRunningModule()
    {
        $module = new Module();

        $result = $module->run();

        $this->assertEquals('running...', $result);
    }
}