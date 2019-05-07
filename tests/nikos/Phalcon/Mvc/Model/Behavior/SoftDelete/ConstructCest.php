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

namespace Phalcon\Test\Unit\Mvc\Model\Behavior\SoftDelete;

use UnitTester;

class ConstructCest
{
    /**
     * Tests Phalcon\Mvc\Model\Behavior\SoftDelete :: __construct()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function mvcModelBehaviorSoftDeleteConstruct(UnitTester $I)
    {
        $I->wantToTest('Mvc\Model\Behavior\SoftDelete - __construct()');

        $I->skipTest('Need implementation');
    }
}