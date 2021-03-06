<?php
session_start();
require_once(dirname(__FILE__).'/configs.php');
require_once(_BASEDIR_.'/model/settings/DB.php');
require_once(_BASEDIR_.'/model/functions/Dbase.php');
require_once(_BASEDIR_.'/model/pages/Settings.php');
require_once(_BASEDIR_.'controller/include.php');
require_once(_BASEDIR_.'model/functions/Get.php');
require_once(_BASEDIR_.'model/functions/Session.php');
require_once(_BASEDIR_.'model/functions/Key.php');
require_once(_BASEDIR_.'model/functions/Harizmi.php');
require_once(_BASEDIR_.'model/functions/IbniYunus.php');
require_once(_BASEDIR_.'model/settings/checkUrl.php');
require_once(_BASEDIR_.'model/smarty/smarty.php');
require_once(_BASEDIR_.'model/functions/Build.php');
require_once(_BASEDIR_.'model/functions/Page.php');
require_once(_BASEDIR_.'model/functions/Event.php');
require_once(_BASEDIR_.'model/pages/Company.php');
require_once(_BASEDIR_.'model/pages/Invoice.php');
require_once(_BASEDIR_.'model/pages/Services.php');
require_once(_BASEDIR_.'model/pages/Superuser.php');
require_once(_BASEDIR_.'model/pages/Products.php');
require_once(_BASEDIR_.'model/pages/Customers.php');
require_once(_BASEDIR_.'model/pages/Categories.php');
require_once(_BASEDIR_.'model/pages/Options.php');
require_once(_BASEDIR_.'model/pages/Providers.php');
require_once(_BASEDIR_.'model/pages/Mainpage.php');
require_once(_BASEDIR_.'model/pages/Cart.php');
require_once(_BASEDIR_.'model/pages/Seller.php');
require_once(_BASEDIR_.'model/pages/BuyInvoices.php');
require_once(_BASEDIR_.'model/pages/Events.php');
require_once(_BASEDIR_.'model/settings/lang.php');
include(_THEME_BASE_DIR_.'/functions/Functions.php');
?>
