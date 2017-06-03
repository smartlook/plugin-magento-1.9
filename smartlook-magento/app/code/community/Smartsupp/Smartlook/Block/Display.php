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

class Smartsupp_Smartlook_Block_Display extends Mage_Core_Block_Template
{	
    public function getCustomerName()
    {
        if (Mage::helper('smartlook')->getCustomerName()) {
            return 'smartlook ("tag", "name", "' . Mage::helper('customer')->getCurrentCustomer()->getFirstname() . ' ' . Mage::helper('customer')->getCurrentCustomer()->getLastname() . '");';
        }
        return null;
    }	
	
    public function getCustomerEmail()
    {
        if (Mage::helper('smartlook')->getCustomerEmail()) {
            return 'smartlook ("tag", "email", "' . Mage::helper('customer')->getCurrentCustomer()->getEmail() . '");';
        }
        return null;
    }

    protected function _toHtml()
    {
        if (Mage::helper('smartlook')->getEnabled()) {
            
            $smartlook_variables_js = '';
            if (Mage::getSingleton('customer/session')->isLoggedIn()) {
                if ($this->getCustomerName()) {
                    $smartlook_variables_js .= $this->getCustomerName();
                }
                if ($this->getCustomerEmail()) {
                    $smartlook_variables_js .= $this->getCustomerEmail();
                }
            }
            
            $block = $this->getLayout()->createBlock(
                'core/template',
                'smartlook_smartlook',
                array(
                    'template' => 'smartlook/widget.phtml',
                    'code' => Mage::helper('smartlook')->getCode(),
                    'variables_js' => $this->jsQuoteEscape($smartlook_variables_js),
                )
            );

            return $block->toHtml();
        }

        return null;
    }
}
