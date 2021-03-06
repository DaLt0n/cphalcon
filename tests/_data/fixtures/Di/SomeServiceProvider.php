<?php
/*
 +------------------------------------------------------------------------+
 | Phalcon Framework                                                      |
 +------------------------------------------------------------------------+
 | Copyright (c) 2011-2017 Phalcon Team (https://phalconphp.com)          |
 +------------------------------------------------------------------------+
 | This source file is subject to the New BSD License that is bundled     |
 | with this package in the file LICENSE.txt.                             |
 |                                                                        |
 | If you did not receive a copy of the license and are unable to         |
 | obtain it through the world-wide-web, please send an email             |
 | to license@phalconphp.com so we can send you a copy immediately.       |
 +------------------------------------------------------------------------+
 */

use Phalcon\Di\ServiceProviderInterface;
use Phalcon\DiInterface;

class SomeServiceProvider implements ServiceProviderInterface
{
    public function register(DiInterface $di)
    {
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'SomeComponent.php';

        $di['foo'] = function () {
            return 'bar';
        };

        $di['fooAction'] = function () {
            return new \SomeComponent('phalcon');
        };
    }
}
