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

namespace Phalcon\Test\Unit\Storage\Adapter\Libmemcached;

use Phalcon\Storage\Adapter\Libmemcached;
use Phalcon\Test\Fixtures\Traits\LibmemcachedTrait;
use UnitTester;

/**
 * Class DecrementCest
 */
class DecrementCest
{
    use LibmemcachedTrait;

    /**
     * Tests Phalcon\Storage\Adapter\Libmemcached :: decrement()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-03-31
     */
    public function storageAdapterLibmemcachedDecrement(UnitTester $I)
    {
        $I->wantToTest('Storage\Adapter\Libmemcached - decrement()');
        $adapter = new Libmemcached($this->getOptions());

        $key    = 'cache-data';
        $result = $adapter->set($key, 100);
        $I->assertTrue($result);

        $expected = 99;
        $actual   = $adapter->decrement($key);
        $I->assertEquals($expected, $actual);

        $actual = $adapter->get($key);
        $I->assertEquals($expected, $actual);

        $expected = 90;
        $actual   = $adapter->decrement($key, 9);
        $I->assertEquals($expected, $actual);

        $actual = $adapter->get($key);
        $I->assertEquals($expected, $actual);
    }
}