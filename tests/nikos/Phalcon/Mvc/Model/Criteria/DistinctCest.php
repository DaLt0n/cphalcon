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

namespace Phalcon\Test\Unit\Mvc\Model\Criteria;

use UnitTester;

class DistinctCest
{
    /**
     * Tests Phalcon\Mvc\Model\Criteria :: distinct()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-07
     */
    public function mvcModelCriteriaDistinct(UnitTester $I)
    {
        $I->wantToTest('Mvc\Model\Criteria - distinct()');

        $I->skipTest('Need implementation');
    }
}