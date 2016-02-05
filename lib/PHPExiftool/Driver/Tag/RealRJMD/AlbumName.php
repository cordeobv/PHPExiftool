<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\RealRJMD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class AlbumName extends AbstractTag
{

    protected $Id = 'Album/Name';

    protected $Name = 'AlbumName';

    protected $FullName = 'Real::Metadata';

    protected $GroupName = 'Real-RJMD';

    protected $g0 = 'Real';

    protected $g1 = 'Real-RJMD';

    protected $g2 = 'Video';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Album Name';

}
