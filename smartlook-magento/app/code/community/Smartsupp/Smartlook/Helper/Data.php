<?php
/**
 * Smartlook integration module.
 * 
 * @package   Smartlook
 * @author    Smartlook <vladimir@smartsupp.com>
 * @link      http://www.smartsupp.com
 * @copyright 2015 Smartsupp.com
 * @license   GPL-2.0+
 *
 * Plugin Name:       Smartlook
 * Plugin URI:        http://www.getsmartlook.com
 * Description:       Adds Smartlook code to PrestaShop.
 * Version:           1.0.0
 * Author:            Smartsupp
 * Author URI:        http://www.smartsupp.com
 * Text Domain:       smartlook
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

class Smartsupp_Smartlook_Helper_Data extends Mage_Core_Helper_Abstract
{
    const SMARTLOOK_SIGNUP_URL = 'https://www.getsmartlook.com/cs/sign/up';
    const SMARTLOOK_DASHBOARD_URL = 'https://www.getsmartlook.com/app/dashboard/';

    public function getEnabled ()
    {
        return Mage::getStoreConfigFlag('smartlook/settings/enabled');
    }

    public function getCode ()
    {
        return Mage::getStoreConfig('smartlook/settings/code');
    }
		
    public function getCustomerName ()
    {
        return Mage::getStoreConfigFlag('smartlook/variables/customername');
    }

    public function getCustomerEmail ()
    {
        return Mage::getStoreConfigFlag('smartlook/variables/customeremail');
    }
}
