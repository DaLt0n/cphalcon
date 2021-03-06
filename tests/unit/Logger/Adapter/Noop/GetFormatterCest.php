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

namespace Phalcon\Test\Unit\Logger\Adapter\Noop;

use Phalcon\Logger\Adapter\Noop;
use Phalcon\Logger\Formatter\FormatterInterface;
use Phalcon\Logger\Formatter\Line;
use UnitTester;

class GetFormatterCest
{
    /**
     * Tests Phalcon\Logger\Adapter\Noop :: getFormatter()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function loggerAdapterNoopGetFormatter(UnitTester $I)
    {
        $I->wantToTest('Logger\Adapter\Noop - getFormatter()');

        $adapter = new Noop();

        $adapter->getFormatter(
            new Line()
        );

        $I->assertInstanceOf(
            FormatterInterface::class,
            $adapter->getFormatter()
        );
    }
}
