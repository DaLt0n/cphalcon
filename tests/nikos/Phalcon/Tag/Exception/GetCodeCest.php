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

namespace Phalcon\Test\Unit\Tag\Exception;

use UnitTester;

class GetCodeCest
{
    /**
     * Tests Phalcon\Tag\Exception :: getCode()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function tagExceptionGetCode(UnitTester $I)
    {
        $I->wantToTest('Tag\Exception - getCode()');

        $I->skipTest('Need implementation');
    }
}