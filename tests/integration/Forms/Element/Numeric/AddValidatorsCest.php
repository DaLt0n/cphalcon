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

namespace Phalcon\Test\Integration\Forms\Element\Numeric;

use IntegrationTester;

/**
 * Class AddValidatorsCest
 */
class AddValidatorsCest
{
    /**
     * Tests Phalcon\Forms\Element\Numeric :: addValidators()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function formsElementNumericAddValidators(IntegrationTester $I)
    {
        $I->wantToTest('Forms\Element\Numeric - addValidators()');
        $I->skipTest('Need implementation');
    }
}
