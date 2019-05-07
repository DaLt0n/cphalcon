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

namespace Phalcon\Test\Unit\Session\Adapter\Redis;

use UnitTester;

class GcCest
{
    /**
     * Tests Phalcon\Session\Adapter\Redis :: gc()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function sessionAdapterRedisGc(UnitTester $I)
    {
        $I->wantToTest('Session\Adapter\Redis - gc()');

        $I->skipTest('Need implementation');
    }
}