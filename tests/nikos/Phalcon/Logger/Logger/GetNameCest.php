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

namespace Phalcon\Test\Unit\Logger\Logger;

use UnitTester;

class GetNameCest
{
    /**
     * Tests Phalcon\Logger\Logger :: getName()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function loggerLoggerGetName(UnitTester $I)
    {
        $I->wantToTest('Logger\Logger - getName()');

        $I->skipTest('Need implementation');
    }
}