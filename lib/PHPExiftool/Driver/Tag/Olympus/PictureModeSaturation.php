<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class PictureModeSaturation extends AbstractTag
{

    protected $Id = 1313;

    protected $Name = 'PictureModeSaturation';

    protected $FullName = 'Olympus::CameraSettings';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Picture Mode Saturation';

    protected $flag_Permanent = true;

    protected $MaxLength = 3;

}
