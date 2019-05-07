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

namespace Phalcon\Test\Unit\Http\Message\Request;

use UnitTester;

class WithMethodCest
{
    /**
     * Tests Phalcon\Http\Message\Request :: withMethod()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function httpMessageRequestWithMethod(UnitTester $I)
    {
        $I->wantToTest('Http\Message\Request - withMethod()');

        $I->skipTest('Need implementation');
    }
}