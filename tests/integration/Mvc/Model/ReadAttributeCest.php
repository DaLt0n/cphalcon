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

namespace Phalcon\Test\Integration\Mvc\Model;

use IntegrationTester;
use Phalcon\Test\Fixtures\Traits\DiTrait;
use Phalcon\Test\Models\Users;

/**
 * Class ReadAttributeCest
 */
class ReadAttributeCest
{
    use DiTrait;

    public function _before(IntegrationTester $I)
    {
        $this->setNewFactoryDefault();
        $this->setDiMysql();
    }

    /**
     * Tests Phalcon\Mvc\Model :: readAttribute()
     *
     * @author Sid Roberts <sid@sidroberts.co.uk>
     * @since  2019-04-18
     */
    public function mvcModelReadAttribute(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\Model - readAttribute()');

        $user = new Users();

        $user->assign(
            [
                'id'   => 123,
                'name' => 'Sid',
            ]
        );

        $I->assertEquals(
            123,
            $user->readAttribute('id')
        );

        $I->assertEquals(
            'Sid',
            $user->readAttribute('name')
        );
    }
}
