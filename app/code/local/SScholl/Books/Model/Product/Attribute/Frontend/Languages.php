<?php /**************** Copyright notice ************************
 *  (c) 2011 Simon Eric Scholl <simon@sdscholl.de>
 *  All rights reserved
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 ***************************************************************/

class SScholl_Books_Model_Product_Attribute_Frontend_Languages
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
		$languages = array();
		foreach (explode(';', $value) as $language) {
			$languages[] = Mage::helper('sschollbooks')->__(
				$this->_source()->getString($language)
			);
		}
        return implode('; ', $languages);
    }
	
	/**
	 * @return SScholl_Books_Model_Product_Attribute_Source_Languages
	 */
	protected function _source()
	{
		return Mage::getModel('sschollbooks/product_attribute_source_languages');
	}
	
}

