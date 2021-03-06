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

namespace Phalcon\Test\Unit\Cache\Adapter\Libmemcached;

use function getOptionsLibmemcached;
use Phalcon\Cache\Adapter\Libmemcached;
use Phalcon\Storage\SerializerFactory;
use Phalcon\Test\Fixtures\Traits\LibmemcachedTrait;
use UnitTester;

class IncrementCest
{
    use LibmemcachedTrait;

    /**
     * Tests Phalcon\Cache\Adapter\Libmemcached :: increment()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-03-31
     */
    public function cacheAdapterLibmemcachedIncrement(UnitTester $I)
    {
        $I->wantToTest('Cache\Adapter\Libmemcached - increment()');

        $serializer = new SerializerFactory();
        $adapter    = new Libmemcached($serializer, getOptionsLibmemcached());

        $key = 'cache-data';

        $I->assertTrue(
            $adapter->set($key, 1)
        );

        $expected = 2;

        $I->assertEquals(
            $expected,
            $adapter->increment($key)
        );

        $I->assertEquals(
            $expected,
            $adapter->get($key)
        );



        $expected = 10;

        $I->assertEquals(
            $expected,
            $adapter->increment($key, 8)
        );

        $I->assertEquals(
            $expected,
            $adapter->get($key)
        );



        /**
         * unknown key
         */
        $key = 'unknown';

        $I->assertFalse(
            $adapter->increment($key)
        );
    }
}
