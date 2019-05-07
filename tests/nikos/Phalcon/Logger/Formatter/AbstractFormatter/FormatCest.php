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

namespace Phalcon\Test\Unit\Logger\Formatter\AbstractFormatter;

use UnitTester;

class FormatCest
{
    /**
     * Tests Phalcon\Logger\Formatter\AbstractFormatter :: format()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function loggerFormatterAbstractFormatterFormat(UnitTester $I)
    {
        $I->wantToTest('Logger\Formatter\AbstractFormatter - format()');

        $I->skipTest('Need implementation');
    }
}