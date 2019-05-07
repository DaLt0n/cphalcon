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

namespace Phalcon\Test\Unit\Mvc\Model\MetaData\Redis;

use UnitTester;

class WriteCest
{
    /**
     * Tests Phalcon\Mvc\Model\MetaData\Redis :: write()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function mvcModelMetaDataRedisWrite(UnitTester $I)
    {
        $I->wantToTest('Mvc\Model\MetaData\Redis - write()');

        $I->skipTest('Need implementation');
    }
}