<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPAcdsee;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class ReleaseDate extends AbstractTag
{

    protected $Id = 'ReleaseDate';

    protected $Name = 'ReleaseDate';

    protected $FullName = 'XMP::acdsee';

    protected $GroupName = 'XMP-acdsee';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-acdsee';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Release Date';

    protected $flag_Avoid = true;

}
