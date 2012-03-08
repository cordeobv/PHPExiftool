<?php

namespace PHPExiftool\Driver\Tag\XMPDex;

class LicenseType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'licensetype';

    protected $Name = 'LicenseType';

    protected $FullName = 'XMP::dex';

    protected $GroupName = 'XMP-dex';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-dex';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'License Type';

    protected $Values = array(
        'adware' => array(
            'Id' => 'adware',
            'Label' => 'Adware',
        ),
        'commercial' => array(
            'Id' => 'commercial',
            'Label' => 'Commercial',
        ),
        'demo' => array(
            'Id' => 'demo',
            'Label' => 'Demo',
        ),
        'freeware' => array(
            'Id' => 'freeware',
            'Label' => 'Freeware',
        ),
        'open source' => array(
            'Id' => 'open source',
            'Label' => 'Open Source',
        ),
        'public domain' => array(
            'Id' => 'public domain',
            'Label' => 'Public Domain',
        ),
        'shareware' => array(
            'Id' => 'shareware',
            'Label' => 'Shareware',
        ),
        'unknown' => array(
            'Id' => 'unknown',
            'Label' => 'Unknown',
        ),
    );

}