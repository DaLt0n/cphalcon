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

namespace Phalcon\Test\Unit\Storage\Adapter\Memory;

use UnitTester;

class ClearCest
{
    /**
     * Tests Phalcon\Storage\Adapter\Memory :: clear()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function storageAdapterMemoryClear(UnitTester $I)
    {
        $I->wantToTest('Storage\Adapter\Memory - clear()');

        $I->skipTest('Need implementation');
    }
}