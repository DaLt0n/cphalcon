
extern zend_class_entry *phalcon_firewall_adapterinterface_ce;

ZEPHIR_INIT_CLASS(Phalcon_Firewall_AdapterInterface);

#if PHP_VERSION_ID >= 70200
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_firewall_adapterinterface_getdefaultaccess, 0, 0, IS_LONG, 0)
#else
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_firewall_adapterinterface_getdefaultaccess, 0, 0, IS_LONG, NULL, 0)
#endif
ZEND_END_ARG_INFO()

#if PHP_VERSION_ID >= 70200
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_firewall_adapterinterface_isalwaysresolvingrole, 0, 0, _IS_BOOL, 0)
#else
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_firewall_adapterinterface_isalwaysresolvingrole, 0, 0, _IS_BOOL, NULL, 0)
#endif
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_phalcon_firewall_adapterinterface_setalwaysresolvingrole, 0, 0, 1)
#if PHP_VERSION_ID >= 70200
	ZEND_ARG_TYPE_INFO(0, alwaysResolvingRole, _IS_BOOL, 0)
#else
	ZEND_ARG_INFO(0, alwaysResolvingRole)
#endif
ZEND_END_ARG_INFO()

#if PHP_VERSION_ID >= 70200
ZEND_BEGIN_ARG_WITH_RETURN_OBJ_INFO_EX(arginfo_phalcon_firewall_adapterinterface_setcache, 0, 1, Phalcon\\Firewall\\AdapterInterface, 0)
#else
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_firewall_adapterinterface_setcache, 0, 1, IS_OBJECT, "Phalcon\\Firewall\\AdapterInterface", 0)
#endif
	ZEND_ARG_OBJ_INFO(0, cache, Phalcon\\Cache\\Adapter\\AdapterInterface, 0)
ZEND_END_ARG_INFO()

#if PHP_VERSION_ID >= 70200
ZEND_BEGIN_ARG_WITH_RETURN_OBJ_INFO_EX(arginfo_phalcon_firewall_adapterinterface_setdefaultaccess, 0, 1, Phalcon\\Firewall\\AdapterInterface, 0)
#else
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_firewall_adapterinterface_setdefaultaccess, 0, 1, IS_OBJECT, "Phalcon\\Firewall\\AdapterInterface", 0)
#endif
#if PHP_VERSION_ID >= 70200
	ZEND_ARG_TYPE_INFO(0, defaultAccess, IS_LONG, 0)
#else
	ZEND_ARG_INFO(0, defaultAccess)
#endif
ZEND_END_ARG_INFO()

#if PHP_VERSION_ID >= 70200
ZEND_BEGIN_ARG_WITH_RETURN_OBJ_INFO_EX(arginfo_phalcon_firewall_adapterinterface_setrolecallback, 0, 1, Phalcon\\Firewall\\AdapterInterface, 0)
#else
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_firewall_adapterinterface_setrolecallback, 0, 1, IS_OBJECT, "Phalcon\\Firewall\\AdapterInterface", 0)
#endif
	ZEND_ARG_INFO(0, callback)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(phalcon_firewall_adapterinterface_method_entry) {
	PHP_ABSTRACT_ME(Phalcon_Firewall_AdapterInterface, getDefaultAccess, arginfo_phalcon_firewall_adapterinterface_getdefaultaccess)
	PHP_ABSTRACT_ME(Phalcon_Firewall_AdapterInterface, getRoleCallback, NULL)
	PHP_ABSTRACT_ME(Phalcon_Firewall_AdapterInterface, isAlwaysResolvingRole, arginfo_phalcon_firewall_adapterinterface_isalwaysresolvingrole)
	PHP_ABSTRACT_ME(Phalcon_Firewall_AdapterInterface, setAlwaysResolvingRole, arginfo_phalcon_firewall_adapterinterface_setalwaysresolvingrole)
	PHP_ABSTRACT_ME(Phalcon_Firewall_AdapterInterface, setCache, arginfo_phalcon_firewall_adapterinterface_setcache)
	PHP_ABSTRACT_ME(Phalcon_Firewall_AdapterInterface, setDefaultAccess, arginfo_phalcon_firewall_adapterinterface_setdefaultaccess)
	PHP_ABSTRACT_ME(Phalcon_Firewall_AdapterInterface, setRoleCallback, arginfo_phalcon_firewall_adapterinterface_setrolecallback)
	PHP_FE_END
};
