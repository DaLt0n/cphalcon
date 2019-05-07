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

namespace Phalcon\Test\Unit\Session\Adapter\Libmemcached;

use UnitTester;

class GcCest
{
    /**
     * Tests Phalcon\Session\Adapter\Libmemcached :: gc()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function sessionAdapterLibmemcachedGc(UnitTester $I)
    {
        $I->wantToTest('Session\Adapter\Libmemcached - gc()');

        $I->skipTest('Need implementation');
    }
}