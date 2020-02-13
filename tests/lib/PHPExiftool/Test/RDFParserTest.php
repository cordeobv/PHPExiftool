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
use PHPExiftool\Exception\RuntimeException;
use PHPExiftool\RDFParser;
use PHPUnit\Framework\TestCase;

class RDFParserTest extends TestCase
{
    /**
     * @var RDFParser
     */
    protected $object;

    protected function setUp(): void
    {
        $this->object = new RDFParser;
    }

    /**
     * @covers RDFParser::open
     */
    public function testOpen()
    {
        $this->markTestIncomplete('Nothing asserted');
        $this->object->open(file_get_contents(__DIR__ . '/../../../files/simplefile.xml'));
    }

    /**
     * @covers RDFParser::close
     */
    public function testClose()
    {
        $this->markTestIncomplete('Nothing asserted');
        $this->object->close();
    }

    /**
     * @covers RDFParser::ParseEntities
     * @covers RDFParser::getDom
     * @covers RDFParser::getDomXpath
     * @covers RDFParser::getNamespacesFromXml
     */
    public function testParseEntities()
    {
        $entities = $this->object
            ->open(file_get_contents(__DIR__ . '/../../../files/simplefile.xml'))
            ->parseEntities();

        $this->assertInstanceOf('\\Doctrine\\Common\\Collections\\ArrayCollection', $entities);
        $this->assertEquals(1, count($entities));
        $this->assertInstanceOf('\\PHPExiftool\\FileEntity', $entities->first());
    }

    /**
     * @covers RDFParser::ParseEntities
     * @covers RDFParser::getDom
     * @covers RDFParser::getDomXpath
     * @covers \PHPExiftool\Exception\LogicException
     */
    public function testParseEntitiesWithoutDom()
    {
        $this->expectException(LogicException::class);
        $this->object->parseEntities();
    }

    /**
     * @covers RDFParser::ParseEntities
     * @covers RDFParser::getDom
     * @covers RDFParser::getDomXpath
     * @covers \PHPExiftool\Exception\ParseError
     * @covers \PHPExiftool\Exception\RuntimeException
     */
    public function testParseEntitiesWrongDom()
    {
        $this->expectException(RuntimeException::class);
        $this->object->open('wrong xml')->parseEntities();
    }

    /**
     * @covers RDFParser::ParseMetadatas
     * @covers RDFParser::getDom
     * @covers RDFParser::getDomXpath
     */
    public function testParseMetadatas()
    {
        $metadatas = $this->object
            ->open(file_get_contents(__DIR__ . '/../../../files/ExifTool.xml'))
            ->ParseMetadatas();

        $this->assertInstanceOf('\\PHPExiftool\\Driver\\Metadata\\MetadataBag', $metadatas);
        $this->assertEquals(348, count($metadatas));
    }

    /**
     * @covers RDFParser::Query
     * @covers RDFParser::readNodeValue
     */
    public function testQuery()
    {
        $xml = "<?xml version='1.0' encoding='UTF-8'?>
            <rdf:RDF xmlns:rdf='http://www.w3.org/1999/02/22-rdf-syntax-ns#'>
            <rdf:Description xmlns:NeutronSpace='http://ns.exiftool.ca/NeutronSpace/1.0/'>
                <NeutronSpace:SpecialRomain>Hello World !</NeutronSpace:SpecialRomain>
                <NeutronSpace:SpecialRomainbase64 rdf:datatype='http://www.w3.org/2001/XMLSchema#base64Binary'>SGVsbG8gYmFzZTY0ICE=</NeutronSpace:SpecialRomainbase64>
                <NeutronSpace:Multi>
                    <rdf:Bag>
                        <rdf:li>romain</rdf:li>
                        <rdf:li>neutron</rdf:li>
                    </rdf:Bag>
                </NeutronSpace:Multi>
            </rdf:Description>
            </rdf:RDF>";

        $this->object->open($xml);

        $metadata_simple = $this->object->Query('NeutronSpace:SpecialRomain');
        $metadata_base64 = $this->object->Query('NeutronSpace:SpecialRomainbase64');
        $metadata_multi = $this->object->Query('NeutronSpace:Multi');
        $null_datas = $this->object->Query('NeutronSpace:NoData');
        $null_datas_2 = $this->object->Query('NamespaceUnknown:NoData');

        $this->assertNull($null_datas);
        $this->assertNull($null_datas_2);

        $this->assertInstanceOf('\\PHPExiftool\\Driver\\Value\\Mono', $metadata_simple);
        $this->assertInstanceOf('\\PHPExiftool\\Driver\\Value\\Binary', $metadata_base64);
        $this->assertInstanceOf('\\PHPExiftool\\Driver\\Value\\Multi', $metadata_multi);

        $this->assertEquals('Hello World !', $metadata_simple->asString());
        $this->assertEquals('Hello base64 !', $metadata_base64->asString());
        $this->assertEquals(array('romain', 'neutron'), $metadata_multi->asArray());
    }
}
