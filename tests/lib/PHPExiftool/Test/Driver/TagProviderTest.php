<?php
/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Test\Driver;

use PHPExiftool\Driver\TagProvider;
use PHPUnit\Framework\TestCase;

class TagProviderTest extends TestCase
{
    private $object;
    protected function setUp(): void
    {
        $this->object = new TagProvider;
    }

    public function testGetAll()
    {
        $this->assertIsArray($this->object->getAll());
    }

    public function testGetLookupTable()
    {
        $this->assertIsArray($this->object->getLookupTable());
    }
}
