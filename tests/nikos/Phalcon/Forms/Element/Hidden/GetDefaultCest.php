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

namespace Phalcon\Test\Unit\Forms\Element\Hidden;

use UnitTester;

class GetDefaultCest
{
    /**
     * Tests Phalcon\Forms\Element\Hidden :: getDefault()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function formsElementHiddenGetDefault(UnitTester $I)
    {
        $I->wantToTest('Forms\Element\Hidden - getDefault()');

        $I->skipTest('Need implementation');
    }
}