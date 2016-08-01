<?php /**************** Copyright notice ************************
 *  (c) 2011 Simon Eric Scholl <simon@sdscholl.de>
 *  All rights reserved
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 ***************************************************************/

class SScholl_Books_Helper_Config
{

	private $_attributeSetName = 'Book';

	public function getAttributeSetName()
	{
		return $this->_attributeSetName;
	}

	public function getAttributeSetId()
	{
		$entityTypeId = Mage::getModel('eav/entity')
			->setType('catalog_product')
			->getTypeId();
		return Mage::getModel('eav/entity_attribute_set')
			->getCollection()
			->setEntityTypeFilter($entityTypeId)
			->addFieldToFilter('attribute_set_name', $this->getAttributeSetName())
			->getFirstItem()
			->getAttributeSetId();
	}

	public function getTaxClassHigh()
	{
		return Mage::getStoreConfig('sschollbooks/product_tax_class_id/high');
	}

	public function getTaxClassStandard()
	{
		return Mage::getStoreConfig('sschollbooks/product_tax_class_id/standard');
	}

	public function getTaxClassReduced()
	{
		return Mage::getStoreConfig('sschollbooks/product_tax_class_id/reduced');
	}

	public function getTaxClassFree()
	{
		return Mage::getStoreConfig('sschollbooks/product_tax_class_id/free');
	}

}
