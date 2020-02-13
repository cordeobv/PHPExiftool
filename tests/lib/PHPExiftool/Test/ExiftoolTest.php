<?php
/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Test;

use Monolog\Logger;
use Monolog\Handler\NullHandler;
use PHPExiftool\Exception\RuntimeException;
use PHPExiftool\Exiftool;
use PHPUnit\Framework\TestCase;

class ExiftoolTest extends TestCase
{

    /**
     * @covers Exiftool::executeCommand
     */
    public function testExecuteCommand()
    {
        $exiftool = new Exiftool($this->getlogger());
        $this->assertRegExp('/\d+\.\d+/', $exiftool->executeCommand('-ver'));
    }

    /**
     * @covers Exiftool::executeCommand
     * @covers RuntimeException
     */
    public function testExecuteCommandFailed()
    {
        $this->expectException(RuntimeException::class);
        $exiftool = new Exiftool($this->getlogger());
        $exiftool->executeCommand('-prout');
    }

    private function getlogger()
    {
        $logger = new Logger('Tests');
        $logger->pushHandler(new NullHandler());

        return $logger;
    }
}

