<?php
/**
 * This file is part of the Totem package
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 *
 * @copyright Baptiste Clavié <clavie.b@gmail.com>
 * @license   http://www.opensource.org/licenses/MIT-License MIT License
 */

namespace Totem\Change;

use Totem\ChangeInterface;

/**
 * Represents something that was removed from the original data
 *
 * @author Baptiste Clavié <clavie.b@gmail.com>
 */
final class Removal implements ChangeInterface
{
    /** @var mixed */
    private $old;

    public function __construct($old)
    {
        $this->old = $old;
    }

    public function getNew()
    {
        return null;
    }

    public function getOld()
    {
        return $this->old;
    }
}

