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

use PHPExiftool\Exception\LogicException;
use PHPExiftool\PreviewExtractor;
use PHPUnit\Framework\TestCase;

abstract class AbstractPreviewExtractorTest extends TestCase
{

    /**
     * @covers PreviewExtractor::extract
     */
    public function testExtract()
    {
        $extractor = new PreviewExtractor($this->getExiftool());

        $tmpDir = sys_get_temp_dir() . '/tests' . mt_rand(10000, 99999);

        mkdir($tmpDir);

        $files = $extractor->extract(__DIR__ . '/../../../files/ExifTool.jpg', $tmpDir);

        $this->assertInstanceOf('\\DirectoryIterator', $files);

        $n = 0;
        $unlinks = array();

        foreach ($files as $file) {
            if ($file->isDot() || $file->isDir()) {
                continue;
            }

            $unlinks[] = $file->getPathname();
            $n ++;
        }

        foreach ($unlinks as $u) {
            unlink($u);
        }

        $this->assertEquals(1, $n);
    }

    public function testExtractWrongFile()
    {
        $this->expectException(LogicException::class);
        $extractor = new PreviewExtractor($this->getExiftool());

        $tmpDir = sys_get_temp_dir() . '/tests' . mt_rand(10000, 99999);

        $extractor->extract(__DIR__ . '/ExifTool.jpg', $tmpDir);
    }

    public function testExtractWrongDir()
    {
        $this->expectException(LogicException::class);
        $extractor = new PreviewExtractor($this->getExiftool());

        $tmpDir = sys_get_temp_dir() . '/tests' . mt_rand(10000, 99999);

        $extractor->extract(__DIR__ . '/../../../files/ExifTool.jpg', $tmpDir);
    }

    abstract protected function getExiftool();
}
