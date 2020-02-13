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
use PHPExiftool\Exception\InvalidArgumentException;
use PHPExiftool\InformationDumper;
use PHPExiftool\Exiftool;
use PHPUnit\Framework\TestCase;

class InformationDumperTest extends TestCase
{
    /**
     * @var InformationDumper
     */
    protected $object;

    protected function setUp(): void
    {
        $logger = new Logger('Tests');
        $logger->pushHandler(new NullHandler());

        $this->object = new InformationDumper(new Exiftool($logger));
    }

    /**
     * @covers InformationDumper::listDatas
     */
    public function testListDatas()
    {
        $this->markTestIncomplete('Nothing asserted');
        $this->object->listDatas();
    }

    /**
     * @covers InformationDumper::listDatas
     * @covers InvalidArgumentException
     */
    public function testListDatasInvalidType()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->object->listDatas('Scrooge');
    }
}
