
#ifdef HAVE_CONFIG_H
#include "../../../ext_config.h"
#endif

#include <php.h>
#include "../../../php_ext.h"
#include "../../../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "kernel/operators.h"
#include "kernel/memory.h"
#include "kernel/array.h"
#include "kernel/fcall.h"


/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
/**
 * Phalcon\Assets\Inline\Js
 *
 * Represents an inline JavaScript
 */
ZEPHIR_INIT_CLASS(Phalcon_Assets_Inline_Js) {

	ZEPHIR_REGISTER_CLASS_EX(Phalcon\\Assets\\Inline, Js, phalcon, assets_inline_js, phalcon_assets_inline_ce, phalcon_assets_inline_js_method_entry, 0);

	return SUCCESS;

}

/**
 * Phalcon\Assets\Inline\Js
 *
 * @param array attributes
 */
PHP_METHOD(Phalcon_Assets_Inline_Js, __construct) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zephir_fcall_cache_entry *_0 = NULL;
	zend_bool filter;
	zval *content_param = NULL, *filter_param = NULL, *attributes = NULL, attributes_sub, __$null, _1, _2;
	zval content;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&content);
	ZVAL_UNDEF(&attributes_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 2, &content_param, &filter_param, &attributes);

	zephir_get_strval(&content, content_param);
	if (!filter_param) {
		filter = 1;
	} else {
		filter = zephir_get_boolval(filter_param);
	}
	if (!attributes) {
		attributes = &attributes_sub;
		ZEPHIR_CPY_WRT(attributes, &__$null);
	} else {
		ZEPHIR_SEPARATE_PARAM(attributes);
	}


	if (Z_TYPE_P(attributes) == IS_NULL) {
		ZEPHIR_INIT_NVAR(attributes);
		zephir_create_array(attributes, 1, 0 TSRMLS_CC);
		add_assoc_stringl_ex(attributes, SL("type"), SL("text/javascript"));
	}
	ZEPHIR_INIT_VAR(&_1);
	ZVAL_STRING(&_1, "js");
	if (filter) {
		ZVAL_BOOL(&_2, 1);
	} else {
		ZVAL_BOOL(&_2, 0);
	}
	ZEPHIR_CALL_PARENT(NULL, phalcon_assets_inline_js_ce, getThis(), "__construct", &_0, 0, &_1, &content, &_2, attributes);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

