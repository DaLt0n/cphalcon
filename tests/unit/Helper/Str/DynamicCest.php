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

namespace Phalcon\Test\Unit\Helper\Str;

use Phalcon\Helper\Str;
use UnitTester;

/**
 * Class DynamicCest
 */
class DynamicCest
{
    /**
     * Tests Phalcon\Helper\Str :: dynamic()
     *
     * @param UnitTester $I
     *
     * @author Stanislav Kiryukhin <korsar.zn@gmail.com>
     * @since  2015-07-01
     */
    public function textDynamic(UnitTester $I)
    {
        $I->wantToTest('Text - dynamic()');
        $actual = Str::dynamic('{Hi|Hello}, my name is a Bob!');
        $I->assertNotContains('{', $actual);
        $I->assertNotContains('}', $actual);

        $expected = 1;
        $actual   = preg_match('/^(Hi|Hello), my name is a Bob!$/', $actual);
        $I->assertEquals($expected, $actual);
    }

    /**
     * Tests Phalcon\Helper\Str :: dynamic() - custom delimiter
     *
     * @param UnitTester $I
     *
     * @author Stanislav Kiryukhin <korsar.zn@gmail.com>
     * @since  2015-07-01
     */
    public function textDynamicCustomDelimiter(UnitTester $I)
    {
        $I->wantToTest('Text - dynamic() - custom delimiter');
        $actual = Str::dynamic('(Hi|Hello), my name is a Bob!', '(', ')');
        $I->assertNotContains('{', $actual);
        $I->assertNotContains('}', $actual);

        $expected = 1;
        $actual   = preg_match('/^(Hi|Hello), my name is a Bob!$/', $actual);
        $I->assertEquals($expected, $actual);
    }

    /**
     * Tests Phalcon\Helper\Str :: dynamic() - custom separator
     *
     * @param UnitTester $I
     *
     * @issue  https://github.com/phalcon/cphalcon/issues/11215
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2016-06-27
     */
    public function textDynamicCustomSeparator(UnitTester $I)
    {
        $I->wantToTest('Text - dynamic() - custom separator');
        $actual = Str::dynamic('{Hi=Hello}, my name is a Bob!', '{', '}', '=');
        $I->assertNotContains('{', $actual);
        $I->assertNotContains('}', $actual);
        $I->assertNotContains('=', $actual);

        $expected = 1;
        $actual   = preg_match('/^(Hi|Hello), my name is a Bob!$/', $actual);
        $I->assertEquals($expected, $actual);

        $actual = Str::dynamic("{Hi'Hello}, my name is a {Rob'Zyxep'Andres}!", '{', '}', "'");
        $I->assertNotContains('{', $actual);
        $I->assertNotContains('}', $actual);
        $I->assertNotContains("''", $actual);

        $expected = 1;
        $actual   = preg_match('/^(Hi|Hello), my name is a (Rob|Zyxep|Andres)!$/', $actual);
        $I->assertEquals($expected, $actual);

        $actual = Str::dynamic('{Hi/Hello}, my name is a {Stanislav/Nikos}!', '{', '}', '/');
        $I->assertNotContains('{', $actual);
        $I->assertNotContains('}', $actual);
        $I->assertNotContains('/', $actual);

        $expected = 1;
        $actual   = preg_match('/^(Hi|Hello), my name is a (Stanislav|Nikos)!$/', $actual);
        $I->assertEquals($expected, $actual);
    }
}