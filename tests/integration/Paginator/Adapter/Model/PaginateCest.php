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

namespace Phalcon\Test\Integration\Paginator\Adapter\Model;

use IntegrationTester;

/**
 * Class PaginateCest
 */
class PaginateCest
{
    /**
     * Tests Phalcon\Paginator\Adapter\Model :: paginate()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function paginatorAdapterModelPaginate(IntegrationTester $I)
    {
        $I->wantToTest('Paginator\Adapter\Model - paginate()');
        $I->skipTest('Need implementation');
    }
}
