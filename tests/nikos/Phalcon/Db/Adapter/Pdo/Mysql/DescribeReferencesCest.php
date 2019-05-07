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

namespace Phalcon\Test\Unit\Db\Adapter\Pdo\Mysql;

use UnitTester;

class DescribeReferencesCest
{
    /**
     * Tests Phalcon\Db\Adapter\Pdo\Mysql :: describeReferences()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function dbAdapterPdoMysqlDescribeReferences(UnitTester $I)
    {
        $I->wantToTest('Db\Adapter\Pdo\Mysql - describeReferences()');

        $I->skipTest('Need implementation');
    }
}