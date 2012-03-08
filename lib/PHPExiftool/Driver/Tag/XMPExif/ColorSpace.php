<?php

namespace PHPExiftool\Driver\Tag\XMPExif;

class ColorSpace extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'ColorSpace';

    protected $Name = 'ColorSpace';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'integer';

    protected $Writable = true;

    protected $Description = 'Color Space';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'sRGB',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Adobe RGB',
        ),
        65535 => array(
            'Id' => 65535,
            'Label' => 'Uncalibrated',
        ),
    );

}