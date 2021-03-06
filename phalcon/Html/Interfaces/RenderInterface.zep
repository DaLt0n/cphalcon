/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Html\Interfaces;

/**
* Phalcon\Html\Interfaces\RenderInterface
*
* Interface Phalcon\Html\Interfaces\RenderInterface
*/
interface RenderInterface {
    /**
    * Generate a string represetation
    */
    public function render() -> string;
}
