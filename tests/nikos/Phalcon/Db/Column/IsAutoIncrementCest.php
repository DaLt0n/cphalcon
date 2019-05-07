<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Db\Column;

use UnitTester;

class IsAutoIncrementCest
{
    /**
     * Tests Phalcon\Db\Column :: isAutoIncrement()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function dbColumnIsAutoIncrement(UnitTester $I)
    {
        $I->wantToTest('Db\Column - isAutoIncrement()');

        $I->skipTest('Need implementation');
    }
}