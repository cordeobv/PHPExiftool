<?php

namespace PHPExiftool\Driver\Tag\AC3;

class SurroundMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'SurroundMode';

    protected $Name = 'SurroundMode';

    protected $FullName = 'M2TS::AC3';

    protected $GroupName = 'AC3';

    protected $g0 = 'M2TS';

    protected $g1 = 'AC3';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Surround Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Not indicated',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Not Dolby surround',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Dolby surround',
        ),
    );

}