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

class Smartsupp_Smartlook_Block_Adminhtml_Config_Source_Hint extends Mage_Adminhtml_Block_Abstract implements Varien_Data_Form_Element_Renderer_Interface
{
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $html = '<p><img style="vertical-align:middle" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJ0AAAAnCAYAAAAVd0rFAAAAAXNSR0IArs4c6QAAAAlwSFlzAAALEwAACxMBAJqcGAAABl5pVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IlhNUCBDb3JlIDUuNC4wIj4KICAgPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICAgICAgPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIKICAgICAgICAgICAgeG1sbnM6dGlmZj0iaHR0cDovL25zLmFkb2JlLmNvbS90aWZmLzEuMC8iCiAgICAgICAgICAgIHhtbG5zOmV4aWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vZXhpZi8xLjAvIgogICAgICAgICAgICB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIKICAgICAgICAgICAgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiCiAgICAgICAgICAgIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIKICAgICAgICAgICAgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIj4KICAgICAgICAgPHRpZmY6UmVzb2x1dGlvblVuaXQ+MjwvdGlmZjpSZXNvbHV0aW9uVW5pdD4KICAgICAgICAgPHRpZmY6Q29tcHJlc3Npb24+NTwvdGlmZjpDb21wcmVzc2lvbj4KICAgICAgICAgPHRpZmY6WFJlc29sdXRpb24+NzI8L3RpZmY6WFJlc29sdXRpb24+CiAgICAgICAgIDx0aWZmOk9yaWVudGF0aW9uPjE8L3RpZmY6T3JpZW50YXRpb24+CiAgICAgICAgIDx0aWZmOllSZXNvbHV0aW9uPjcyPC90aWZmOllSZXNvbHV0aW9uPgogICAgICAgICA8ZXhpZjpQaXhlbFlEaW1lbnNpb24+Mzk8L2V4aWY6UGl4ZWxZRGltZW5zaW9uPgogICAgICAgICA8ZXhpZjpQaXhlbFhEaW1lbnNpb24+MTU3PC9leGlmOlBpeGVsWERpbWVuc2lvbj4KICAgICAgICAgPGV4aWY6Q29sb3JTcGFjZT4xPC9leGlmOkNvbG9yU3BhY2U+CiAgICAgICAgIDx4bXBNTTpJbnN0YW5jZUlEPnhtcC5paWQ6MEEyQThGRTVDODE4MTFFNTk5NzNCNUZGOTBBMzlBQkU8L3htcE1NOkluc3RhbmNlSUQ+CiAgICAgICAgIDx4bXBNTTpEb2N1bWVudElEPnhtcC5kaWQ6MEEyQThGRTZDODE4MTFFNTk5NzNCNUZGOTBBMzlBQkU8L3htcE1NOkRvY3VtZW50SUQ+CiAgICAgICAgIDx4bXBNTTpEZXJpdmVkRnJvbSByZGY6cGFyc2VUeXBlPSJSZXNvdXJjZSI+CiAgICAgICAgICAgIDxzdFJlZjppbnN0YW5jZUlEPnhtcC5paWQ6MEEyQThGRTNDODE4MTFFNTk5NzNCNUZGOTBBMzlBQkU8L3N0UmVmOmluc3RhbmNlSUQ+CiAgICAgICAgICAgIDxzdFJlZjpkb2N1bWVudElEPnhtcC5kaWQ6MEEyQThGRTRDODE4MTFFNTk5NzNCNUZGOTBBMzlBQkU8L3N0UmVmOmRvY3VtZW50SUQ+CiAgICAgICAgIDwveG1wTU06RGVyaXZlZEZyb20+CiAgICAgICAgIDxkYzpzdWJqZWN0PgogICAgICAgICAgICA8cmRmOlNlcS8+CiAgICAgICAgIDwvZGM6c3ViamVjdD4KICAgICAgICAgPHhtcDpNb2RpZnlEYXRlPjIwMTY6MDM6MTQgMTM6MDM6Mzc8L3htcDpNb2RpZnlEYXRlPgogICAgICAgICA8eG1wOkNyZWF0b3JUb29sPlBpeGVsbWF0b3IgMy40LjI8L3htcDpDcmVhdG9yVG9vbD4KICAgICAgPC9yZGY6RGVzY3JpcHRpb24+CiAgIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+CjwqDfQAAA4jSURBVHja7VoJeBRVEgbPFRUFDwQBQRIOQxLIzGQyyRx9hLhxd9V1ja54gK5+iroe68XKfsp+LCCiUSAkM1FOkRsUEFFB2VW5FBGUJGRmAgQCISRAOJJA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"></p>';

        $buttonSignUp = $this->getLayout()->createBlock('adminhtml/widget_button')->setData(array(
            'label'     => $this->__('Not a Smartlook user yet?'),
            'onclick'   => "window.open('". Smartsupp_Smartlook_Helper_Data::SMARTLOOK_SIGNUP_URL ."', '_blank');",
            'class'     => 'add',
            'type'      => 'button',
            'id'        => 'smartlook-signup',
        ))
        ->toHtml();

        $buttonDashboard  = $this->getLayout()->createBlock('adminhtml/widget_button')->setData(array(
            'label'     => $this->__('Smartlook Dashboard'),
            'onclick'   => "window.open('". Smartsupp_Smartlook_Helper_Data::SMARTLOOK_DASHBOARD_URL ."', '_blank');",
            'class'     => 'go',
            'type'      => 'button',
            'id'        => 'smartlook-dashboard',
        ))
        ->toHtml();

        return $html . '<p>' . $buttonSignUp . '&nbsp;&nbsp;' . $buttonDashboard . '</p>';
    }
}
