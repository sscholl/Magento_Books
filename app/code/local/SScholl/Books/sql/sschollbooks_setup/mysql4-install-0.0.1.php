<?php

/*
 * Attribute Sets
 * see HOW TO http://www.magentocommerce.com/wiki/5_-_modules_and_development/0_-_module_development_in_magento/installing_custom_attributes_with_your_module
 */
/* @var $this Mage_Catalog_Model_Resource_Setup */

$catalogProductTypeId = $this->getEntityTypeId('catalog_product');

$this->startSetup();


$book = Mage::helper('sschollbooks/config')->getAttributeSetName();
$catalogProductEntityTypeId = (int) $this->getEntityTypeId('catalog_product');

try {
	/* @var $attributeSet Mage_Eav_Model_Entity_Attribute_Set */
	$attributeSet = Mage::getModel('eav/entity_attribute_set')
	    ->setEntityTypeId($catalogProductEntityTypeId)
	    ->setAttributeSetName($book);
	
	if ($attributeSet->validate()) {
	    $attributeSet
	        ->save()
	        ->initFromSkeleton($catalogProductEntityTypeId)
			->save();
	    $attributeGroup = Mage::getModel('eav/entity_attribute_group');
	    $attributeGroup->setAttributeGroupName($book);
	    $attributeGroup->setAttributeSetId($attributeSet->getId());
	    $attributeSet->setGroups(array($attributeGroup));
	    $attributeSet->save();
	}
} catch (Exception $e) {
    Mage::getSingleton('adminhtml/session')->addWarning($e->getMessage());
}


$attributes = array (
	'recordreference'					=> array('varchar',		'Record Reference',),
	'notification_type'					=> array('int',			'Notification Type', 'input' => 'select', 'source' => 'sschollbooks/product_attribute_source_notificationtype',),
	'isbn'								=> array('varchar',		'ISBN', 'visible_on_front' => 1, 'searchable' => 1),
	'ean'								=> array('varchar',		'EAN', 'visible_on_front' => 1, 'searchable' => 1),
	'product_form_code'					=> array('varchar',		'Product Form', 'input' => 'select', 'source' => 'sschollbooks/product_attribute_source_productform',),
	'contributors'						=> array('varchar',		'Contributors', 'visible_on_front' => 1, 'searchable' => 1, 'frontend' => 'sschollbooks/product_attribute_frontend_semicolonseparated'),
	'authors'							=> array('varchar',		'Authors', 'visible_on_front' => 1, 'searchable' => 1, 'frontend' => 'sschollbooks/product_attribute_frontend_semicolonseparated'),
	'edition_type_code'					=> array('varchar',		'Edition Type Code', 'input' => 'select', 'source' => 'sschollbooks/product_attribute_source_editiontypecode'),
	'edition_number'					=> array('int',			'Edition Number'),
//	'languages'							=> array('varchar',		'Languages', 'visible_on_front' => 1, 'frontend' => 'sschollbooks/product_attribute_frontend_languages'),
	'number_of_pages'					=> array('int',			'Number of Pages', 'visible_on_front' => 1),
	'audience_code'						=> array('int',			'Audience Code', 'input' => 'select', 'source' => 'sschollbooks/product_attribute_source_audiencecode',),
	'imprint_name'						=> array('varchar',		'Imprint', 'searchable' => 1),
	'width'								=> array('varchar',		'Width'),
	'height'							=> array('varchar',		'Height'),
	'thickness'							=> array('varchar',		'Thickness'),
	'diameter'							=> array('varchar',		'Diameter'),
	'wgs_code'							=> array('varchar',		'WGS Code', 'searchable' => 1, 'comment' => 'Code in der Warengruppen-Systematik des deutschen Buchhandels'),
	'category_name'						=> array('varchar',		'Category Name', 'searchable' => 1,),
	'publisher_name'					=> array('varchar',		'Publisher', 'visible_on_front' => 1, 'searchable' => 1,),
	'published_date'					=> array('datetime',	'Published Date', 'visible_on_front' => 1, 'frontend' => 'sschollbooks/product_attribute_frontend_date'),
	'supplier_name'						=> array('varchar',		'Supplier name',),
	'supplier_availability_code'		=> array('varchar',		'Supplier Availability Code', 'input' => 'select', 'source' => 'sschollbooks/product_attribute_source_supplieravailabilitycode',),
	'supplier_product_availability'		=> array('int',			'Supplier Product Availability', 'input' => 'select', 'source' => 'sschollbooks/product_attribute_source_supplierproductavailability',),
);

foreach ($attributes as $name => $data) {
	/* add attributes */
	$attributeData = array(
		'group'			=> $book,
		'type'			=> $data[0],
		'input'			=> 'text',
		'label'			=> $data[1],
		'global'		=> Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
		'visible'		=> 1,
		'required'		=> 0,
		'user_defined'	=> 1,
	);
	if ($data[0] == 'text') {
		$attributeData['input']		= 'textarea';
	}
	if ($data[0] == 'boolean') {
		$attributeData['type']		= 'int';
		$attributeData['input']		= 'boolean';
	}
	if ($data[0] == 'datetime') {
		$attributeData['input']		= 'date';
	}
	foreach ($data as $index => $value) {
		if (!is_int($index)) $attributeData[$index] = $value;
	}
	$this->addAttribute($catalogProductTypeId, $name, $attributeData);
}

$this->endSetup();
