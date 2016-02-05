<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class VerticalMultiSelector extends AbstractTag
{

    protected $Id = '42.1';

    protected $Name = 'VerticalMultiSelector';

    protected $FullName = 'NikonCustom::SettingsD4';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Vertical Multi Selector';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Same as Multi-Selector with Info(U/D) & Playback(R/L)',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Same as Multi-Selector with Info(R/L) & Playback(U/D)',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'Focus Point Selection',
        ),
    );

}
