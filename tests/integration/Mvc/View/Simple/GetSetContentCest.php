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

namespace Phalcon\Test\Integration\Mvc\View\Simple;

use IntegrationTester;
use Phalcon\Mvc\View\Simple;

/**
 * Class GetSetContentCest
 */
class GetSetContentCest
{
    /**
     * Tests Phalcon\Mvc\View\Simple :: getContent()/setContent()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function mvcViewSimpleGetSetContent(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\View\Simple - getContent()/setContents()');

        $view = new Simple();

        $I->assertEquals(
            $view,
            $view->setContent('<h1>hello</h1>')
        );

        $I->assertEquals(
            '<h1>hello</h1>',
            $view->getContent()
        );
    }
}
