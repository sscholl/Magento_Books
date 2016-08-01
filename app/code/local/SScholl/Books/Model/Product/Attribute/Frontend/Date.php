<?php /**************** Copyright notice ************************
 *  (c) 2011 Simon Eric Scholl <simon@sdscholl.de>
 *  All rights reserved
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 ***************************************************************/

class SScholl_Books_Model_Product_Attribute_Frontend_Date
	extends Mage_Eav_Model_Entity_Attribute_Frontend_Abstract
{
    /**
     * Retreive attribute value
     *
     * @param $object
     * @return mixed
     */
    public function getValue(Varien_Object $object)
    {
        $data = '';
        $value = parent::getValue($object);
        $format = Mage::app()->getLocale()->getDateFormat(
            Mage_Core_Model_Locale::FORMAT_TYPE_MEDIUM
        );

        if ($value) {
            try {
                $data = Mage::getSingleton('core/locale')->date($value, Zend_Date::ISO_8601, null, false);
            } catch (Exception $e) {
                $data = Mage::getSingleton('core/locale')->date($value, null, null, false);
            }
			if (substr($value, 8, 2) === '00') {
				$data->addDay(1);
				$format = Zend_Date::MONTH_NAME . ' yyyy';
			}
			if ( !$data ) {
				return '';
			}
	        return $data->toString($format);
        }
		return '';
    }
}

