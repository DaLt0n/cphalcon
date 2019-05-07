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

namespace Phalcon\Test\Unit\Db\Adapter\Pdo;

use UnitTester;

class DescribeIndexesCest
{
    /**
     * Tests Phalcon\Db\Adapter\Pdo :: describeIndexes()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function dbAdapterPdoDescribeIndexes(UnitTester $I)
    {
        $I->wantToTest('Db\Adapter\Pdo - describeIndexes()');

        $I->skipTest('Need implementation');
    }
}