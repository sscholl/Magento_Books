<?php /**************** Copyright notice ************************
 *  (c) 2011 Simon Eric Scholl <simon@sdscholl.de>
 *  All rights reserved
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 ***************************************************************/

class SScholl_Books_Helper_Data extends Mage_Core_Helper_Abstract
{

	/**
	 * @return Mage_Eav_Model_Entity_Attribute_Set
	 */
	public function getAttributeSetId()
	{
		$book = Mage::helper('sschollbooks/config')->getAttributeSetName();
		$entityTypeId = (int) Mage::getModel('catalog/product')->getResource()->getEntityType()->getId();

		/* @var $attributeSetCol Mage_Eav_Model_Resource_Entity_Attribute_Set_Collection */
		$attributeSetCol = Mage::getResourceModel('eav/entity_attribute_set_collection')
			->setEntityTypeFilter($entityTypeId)
			->addFieldToFilter('attribute_set_name', $book);
		$attributeSet = $attributeSetCol->load()->getFirstItem();
		if ( $attributeSet instanceof Mage_Eav_Model_Entity_Attribute_Set ) {
			return $attributeSet->getId();
		} else {
			return null;
		}
	}

}
